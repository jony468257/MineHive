// mutationObserver.js
var config = { attributes: true, childList: true, subtree: true };
var timeoutId;
var targets = [];

// Create an observer instance
var observer = new MutationObserver(function(mutations) {
    const processedIds = new Set();
    const stages = new Set();
    var sumByGroup = new Map();
    var className = '';

    mutations.forEach(function(mutation) {
        var changedNode = mutation.target;
        const id = changedNode.id;
        className = changedNode.classList[0];

        if (!stages.has(className)) {
            stages.add(className);
        }

        if (processedIds.has(id)) {
            return;
        }

        if (!changedNode.classList.contains('d-none')) {
            var textContent = changedNode.textContent.trim();
            if(textContent != '-'){
                sumByGroup.set(className, (sumByGroup.get(className) ?? 0) + parseFloat(textContent));
            }
        }
        processedIds.add(id);
    });
    updateValue(sumByGroup, stages);
});

// Function to update the value
function updateValue(sumByGroup, stages) {
    sumByGroup.forEach(function(value, key) {
        stages.delete(key);
        var text = parseInt(value) > 0 ? parseInt(value) : '-';
        $('#' + key).text(text);
    });

    for (let stage of stages) {
        $('#' + stage).text('-');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    initObserver();
});

function initObserver() {
    resetTimer();
    for(var i = 0; i < targets.length; i++){
        var target = document.querySelectorAll('.' + targets[i]);
        for(var j = 0; j < target.length; j++){
            observer.observe(target[j], config);
        }
    }
}

function resetTimer() {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(disconnectObserver, 30000);
}

function disconnectObserver() {
    observer.disconnect();
}

//cattle.js
function approvePost(id) {
    swal({
        title: 'Are you sure?',
        text: "Do you want to approve this?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Confirm!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-danger ms-2',
        cancelButtonClass: 'btn btn-success',
        buttonsStyling: false,
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            event.preventDefault();
            document.getElementById('delete-form-' + id).submit();
        }
    })
}

function rejectPost(id) {
    swal({
        title: 'Are you sure?',
        text: "Please enter the reason for rejecting this",
        type: 'warning',
        input: 'text',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Confirm!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-danger ms-2',
        cancelButtonClass: 'btn btn-success',
        buttonsStyling: false,
        reverseButtons: true,
        inputValidator: (value) => {
            if (!value) {
                return 'You need to enter a reason!';
            }
        }
    }).then((result) => {
        if (result.value) {
            event.preventDefault();
            $('.rejection_status').val(result.value);
            document.getElementById('delete-cancel-' + id).submit();
        } else {
            return false;
        }
    })
}

$(document).ready(function () {
    const $dateInput = $('.custom-date-format, #date_bulk, .piker-date');
    $dateInput.attr('placeholder', 'dd-mm-yyyy');

    $(document).on('keyup','.custom-date-format, .piker-date, #date_bulk', function (event) {
        const key = event.key;
        const value = $(this).val();
        const cuDate = new Date();
        let previousValue = value;

        if (['Backspace', 'Tab', 'ArrowLeft', 'ArrowRight', 'Delete'].includes(key)) {
            previousValue = value;
            return;
        }

        if (!/^\d{0,2}(-\d{0,2})?(-\d{0,4})?$/.test(value)) {
            $(this).val(value.slice(0, -1));
            return;
        }

        if (value.length === 1) {
            value > 3 ? $(this).val(addZero(value) + '-') : $(this).val(value);
        }

        if (value.length === 2) {
            value <= 31 ? $(this).val(value + '-') : $(this).val(value.slice(0, -1));
        }

        if (value.length === 4) {
            const [day, month] = value.split('-').map(Number);
            month > 1 ? $(this).val(`${day}-${addZero(month)}-`) : $(this).val(value);
        }

        if (value.length === 5) {
            const [day, month] = value.split('-').map(Number);
            let cuYear = cuDate.getFullYear();

            if (getDaysInMonth(cuYear, month) < day && month <= 12) {
                $(this).val(`${getDaysInMonth(cuYear, month)}-${addZero(month)}-`)
            } else if (month > 12) {
                let month = 12
                $(this).val(`${getDaysInMonth(cuYear, month)}-${addZero(month)}-`)
            } else {
                $(this).val(value + '-')
            }
        }

        if (value.length === 6) {
            const [day, month] = value.split('-').map(Number);
            let cuYear = cuDate.getFullYear();

            if (getDaysInMonth(cuYear, month) < day && month <= 12) {
                $(this).val(`${addZero(getDaysInMonth(cuYear, month))}-${addZero(month)}-`)
            } else {
                month <= 12 ? $(this).val(value) : $(this).val(value.slice(0, -2));
            }
        }


        if (value.length === 10) {
            const [day, month, year] = value.split('-').map(Number);

            let cuYear = cuDate.getFullYear();

            if (getDaysInMonth(cuYear, month) < day && month <= 12) {
                $(this).val(`${addZero(getDaysInMonth(cuYear, month))}-${addZero(month)}-${year}`)
            } else if (month > 12) {
                let month = 12;
                $(this).val(`${addZero(getDaysInMonth(cuYear, month))}-${addZero(month)}-${year}`)
            }
        }
    });

    function getDaysInMonth(year, month) {
        let next = new Date(year, month, 1), last = new Date(next - 1);
        return last.getDate();
    }

    function addZero(number) {
        return String(number).padStart(2, '0');
    }

});
