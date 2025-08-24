@php use App\Helper\AuthorizationHelper; @endphp
<form action="{{ route('roles.store') }}" method="POST" role="form" id="formCreate">
    @csrf
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="roleName" class="form-label fw-bold mb-2">{{ __('texts.role_name') }}<span
                    class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="roleName"
                   placeholder="Enter Role" required/>
        </div>
        <hr class="form-separator">
        <div class="col-md-3">
            <label class="form-label fw-bold mb-2">{{ __('texts.permissions') }}</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check-all-permission">
                <label class="title-label-select" for="check-all-permission">All</label>
            </div>
        </div>
        <hr class="form-separator">
        <div class="col-md-4 custom-design-column first-column"></div>
        <div class="col-md-4 custom-design-column second-column"></div>
        <div class="col-md-4 custom-design-column third-column"></div>
        @foreach ($groups as $group)
            @php
                $permissions = AuthorizationHelper::getGroupPermissions($group);
                    $name = strtolower(str_replace(' ', '-', $group));
            @endphp
            <div class="hidden-permission-div">
                <div class="row tree">
                    <div class="col-md-6 tree-leader">
                        <div class="form-check mt-4 mb-3 tree-item">
                            <input tabindex="5" type="checkbox"
                                   class="form-check-input permissions permission-header-input {{ $name }}-header-input"
                                   id="{{ $name }}-group" value="{{ $group }}" data-member="{{ $name }}">
                            <label for="{{ $name }}-group"
                                   class="title-label-select tree-header-text">{{ ucwords(str_replace('.', ' ', $group)) }}</label>
                        </div>
                    </div>
                    <div class="col-md-6 tree-member role-{{ $name }}-group-checkbox">
                        @foreach ($permissions as $permission)
                            @php
                                $danger = stripos($permission->name, 'delete') !== false;
                            @endphp
                            <div class="form-check mt-4 mb-3 tree-item">
                                <input type="checkbox" name="permissions[]" id="check-permission-{{ $permission->id }}"
                                       @class(['form-check-input permissions permission-member-input', $name . '-member-input', 'form-check-danger' => $danger]) value="{{ $permission->name }}"
                                       data-head="{{ $name }}">
                                <label for="check-permission-{{ $permission->id }}"
                                    @class(['title-label-select', 'text-danger' => $danger])>
                                    {{ ucwords(str_replace('.', ' ', $permission->name)) }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3 d-flex justify-content-end">
        <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">{{ __('texts.close') }}</button>
        <button type="submit" class="btn btn-primary">{{ __('texts.save') }}</button>
    </div>
</form>
<script type="text/javascript">
    $('#check-all-permission').change(function () {
        $('input[type=checkbox].permissions ').prop('checked', $(this).is(':checked'));
    });

    $(document).on('change', '.permission-header-input', function () {
        let value = $(this).data('member');
        $(`input[type=checkbox].${value}-member-input`).prop('checked', $(this).is(':checked'));
    })

    $(document).on('change', '.permission-member-input', function () {
        let text = $(this).data('head');
        if ($(this).is(':checked')) {
            $(`input[type=checkbox].${text}-header-input`).prop('checked', true);
        } else {
            if ($(`.${text}-member-input:checked`).length === 0) {
                $(`input[type=checkbox].${text}-header-input`).prop('checked', false);
            }
        }
    })

    @php $column = count($groups); @endphp
    var divs = $('.hidden-permission-div'), columns = {{$column}},
        rows = Math.floor(columns / 3);
    $.each(divs, function (index, el) {
        let html = $(el).html();
        if (index <= (rows + 1)) {
            $('.first-column').append(html);
        } else if ((rows + 1) < index && index <= (rows * 2 + 1)) {
            $('.second-column').append(html);
        } else if ((rows * 2 + 1) < index && index <= (rows * 3)) {
            $('.third-column').append(html);
        } else {
            $('.third-column').append(html);
        }
    })
    divs.remove();

    var trees = $('.tree');
    $.each(trees, function (index, tree) {
        var member = $(tree).children('.tree-member'),
            items = $(member).children('.tree-item'),
            itemFirstOffset = $(member).children('.tree-item:nth-child(1)').offset(),
            itemLastOffset = $(member).children('.tree-item:nth-last-child(1)').offset(),
            before = $(member).prepend('<span class="tree-member-before"></span>'),
            height = itemLastOffset.top - itemFirstOffset.top,
            leader = $(tree).children('.tree-leader'),
            leaderItemWidth = $(leader).children('.tree-item').width(),
            leaderBefore = $(leader).children('.tree-item').append('<span class="tree-leader-before before-y"></span> <span class="tree-leader-before before-x"></span>'),
            headerTextWidth = $(leader).children('.tree-item').children('.tree-header-text').width();
        $(before).children('.tree-member-before').css({
            'height': height + 'px',
        })
        $(leaderBefore).children('.before-y').css({
            'height': (height / 2) - 11 + 'px',
            'left': (headerTextWidth / 2) + 20 + 'px',
        })
        let width, left;
        if ($(items).length > 1) {
            width = leaderItemWidth - ((headerTextWidth / 2) + 2);
            left = (headerTextWidth / 2) + 20;
        } else {
            width = leaderItemWidth - ((headerTextWidth) + 10);
            left = headerTextWidth + 28;
        }
        $(leaderBefore).children('.before-x').css({
            'top': (height / 2) + 11 + 'px',
            'width': width + 'px',
            'left': left + 'px',
        })
    })
</script>
