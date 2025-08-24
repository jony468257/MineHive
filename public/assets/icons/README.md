<style>
    #container {
        height:50px;
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
</style>
### Description

This icon pack is a custom icon pack. This pack is made of Svg, Javascript and CSS.

### Use

If you want to use icon packs you need to setup a path where your svg files will be. Like this...
``` Javascript ```

```javascript
    let path = location.origin + '/assets/icons/svg/';
```

Then you need to get the svg file and then you need to select your icon ``` class``` then replace the file in your
icon  ```class``` class element. Like ...

```html```

```html
    <i class="user-ico"></i>
```

```Javascript```

```javascript
    $.get(
        path + '/user.svg',
        function (t) {
            let iconClass = $('i.user-ico');
            $(iconClass).html(t);
            let i = $('i.user-ico svg').addClass('icon-svg').eq(0);
            $(iconClass).replaceWith(i);
            $('html').css('--user-ico-svg', 'url(' + path + '/user.svg)');
        }, 'text'
    )
```

Then use the icon class in your html file.
<div id="container">
    <summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.0933 14.9135C11.5067 15.0868 10.8133 15.1668 10 15.1668H6.00001C5.18668 15.1668 4.49334 15.0868 3.90668 14.9135C4.05334 13.1802 5.83334 11.8135 8.00001 11.8135C10.1667 11.8135 11.9467 13.1802 12.0933 14.9135Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.0197 2.09331 14.3997 3.90665 14.913C4.05331 13.1797 5.83331 11.813 7.99998 11.813C10.1666 11.813 11.9466 13.1797 12.0933 14.913C13.9066 14.3997 14.6666 13.0197 14.6666 10.4997V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301ZM7.99998 9.94633C6.67998 9.94633 5.61331 8.87302 5.61331 7.55302C5.61331 6.23302 6.67998 5.16634 7.99998 5.16634C9.31998 5.16634 10.3866 6.23302 10.3866 7.55302C10.3866 8.87302 9.31998 9.94633 7.99998 9.94633Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.3867 7.55367C10.3867 8.87367 9.32001 9.94698 8.00001 9.94698C6.68001 9.94698 5.61334 8.87367 5.61334 7.55367C5.61334 6.23367 6.68001 5.16699 8.00001 5.16699C9.32001 5.16699 10.3867 6.23367 10.3867 7.55367Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    </summary>
</div>

```html 
    <i class="user-management-ico"></i>
or
    <i class="user-management-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.99998 15.1663H9.99998C13.3333 15.1663 14.6666 13.833 14.6666 10.4997V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.88666 10.1598L6.47332 8.09984C6.69999 7.80651 7.11999 7.75318 7.41332 7.97984L8.63332 8.93984C8.92666 9.16651 9.34666 9.11318 9.57332 8.82651L11.1133 6.83984" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>


```html 
    <i class="dashboard-ico"></i>
or
    <i class="dashboard-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.98002 15.1663C11.6619 15.1663 14.6467 12.1816 14.6467 8.49967C14.6467 4.81778 11.6619 1.83301 7.98002 1.83301C4.29812 1.83301 1.31335 4.81778 1.31335 8.49967C1.31335 12.1816 4.29812 15.1663 7.98002 15.1663Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 11.5C9.65685 11.5 11 10.1569 11 8.5C11 6.84315 9.65685 5.5 8 5.5C6.34315 5.5 5 6.84315 5 8.5C5 10.1569 6.34315 11.5 8 11.5Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.26666 3.78711L5.62666 6.14044" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.26666 13.2137L5.62666 10.8604" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.7 13.2137L10.34 10.8604" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.7 3.78711L10.34 6.14044" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="cattle-management-ico"></i>
or
    <i class="cattle-management-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.99998 11.1663C10.58 11.1663 12.6666 9.07967 12.6666 6.49967C12.6666 3.91967 10.58 1.83301 7.99998 1.83301C5.41998 1.83301 3.33331 3.91967 3.33331 6.49967" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 11.167V15.167" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10 13.167H6" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="breeding-management-ico"></i>
or
    <i class="breeding-management-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 5.7C2 4.57989 2 4.01984 2.21799 3.59202C2.40973 3.21569 2.71569 2.90973 3.09202 2.71799C3.51984 2.5 4.0799 2.5 5.2 2.5H10.8C11.9201 2.5 12.4802 2.5 12.908 2.71799C13.2843 2.90973 13.5903 3.21569 13.782 3.59202C14 4.01984 14 4.5799 14 5.7V11.3C14 12.4201 14 12.9802 13.782 13.408C13.5903 13.7843 13.2843 14.0903 12.908 14.282C12.4802 14.5 11.9201 14.5 10.8 14.5H5.2C4.07989 14.5 3.51984 14.5 3.09202 14.282C2.71569 14.0903 2.40973 13.7843 2.21799 13.408C2 12.9802 2 12.4201 2 11.3V5.7Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.22222 5.36667C9.22222 5.17998 9.22222 5.08664 9.18589 5.01534C9.15393 4.95262 9.10294 4.90162 9.04022 4.86966C8.96892 4.83333 8.87557 4.83333 8.68889 4.83333H7.31111C7.12443 4.83333 7.03109 4.83333 6.95978 4.86966C6.89706 4.90162 6.84607 4.95262 6.81411 5.01534C6.77778 5.08664 6.77778 5.17998 6.77778 5.36667V6.74444C6.77778 6.93113 6.77778 7.02447 6.74145 7.09577C6.70949 7.1585 6.6585 7.20949 6.59577 7.24145C6.52447 7.27778 6.43113 7.27778 6.24444 7.27778H4.86667C4.67998 7.27778 4.58664 7.27778 4.51534 7.31411C4.45262 7.34607 4.40162 7.39706 4.36966 7.45978C4.33333 7.53108 4.33333 7.62443 4.33333 7.81111V9.18889C4.33333 9.37557 4.33333 9.46892 4.36966 9.54022C4.40162 9.60294 4.45262 9.65393 4.51534 9.68589C4.58664 9.72222 4.67998 9.72222 4.86667 9.72222H6.24444C6.43113 9.72222 6.52447 9.72222 6.59577 9.75855C6.6585 9.79051 6.70949 9.84151 6.74145 9.90423C6.77778 9.97553 6.77778 10.0689 6.77778 10.2556V11.6333C6.77778 11.82 6.77778 11.9134 6.81411 11.9847C6.84607 12.0474 6.89706 12.0984 6.95978 12.1303C7.03109 12.1667 7.12443 12.1667 7.31111 12.1667H8.68889C8.87557 12.1667 8.96892 12.1667 9.04022 12.1303C9.10294 12.0984 9.15393 12.0474 9.18589 11.9847C9.22222 11.9134 9.22222 11.82 9.22222 11.6333V10.2556C9.22222 10.0689 9.22222 9.97553 9.25855 9.90423C9.29051 9.84151 9.34151 9.79051 9.40423 9.75855C9.47553 9.72222 9.56887 9.72222 9.75556 9.72222H11.1333C11.32 9.72222 11.4134 9.72222 11.4847 9.68589C11.5474 9.65393 11.5984 9.60294 11.6303 9.54022C11.6667 9.46892 11.6667 9.37557 11.6667 9.18889V7.81111C11.6667 7.62443 11.6667 7.53109 11.6303 7.45978C11.5984 7.39706 11.5474 7.34607 11.4847 7.31411C11.4134 7.27778 11.32 7.27778 11.1333 7.27778H9.75556C9.56887 7.27778 9.47553 7.27778 9.40423 7.24145C9.34151 7.20949 9.29051 7.1585 9.25855 7.09577C9.22222 7.02447 9.22222 6.93113 9.22222 6.74444V5.36667Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="health-management-ico"></i>
or
    <i class="health-management-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.11334 5.45996L8 8.86662L13.8467 5.47994" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 14.907V8.86035" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.61997 2.15301L3.05998 4.13303C2.25331 4.5797 1.59332 5.69968 1.59332 6.61968V10.3864C1.59332 11.3064 2.25331 12.4264 3.05998 12.873L6.61997 14.853C7.37997 15.273 8.62664 15.273 9.38664 14.853L12.9467 12.873C13.7533 12.4264 14.4133 11.3064 14.4133 10.3864V6.61968C14.4133 5.69968 13.7533 4.5797 12.9467 4.13303L9.38664 2.15301C8.61997 1.72634 7.37997 1.72634 6.61997 2.15301Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.3333 9.32674V6.88676L5.00665 3.2334" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="feed-management-ico"></i>
or
    <i class="feed-management-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.46667 6.67285L8 8.71952L11.5067 6.68618" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 12.3462V8.71289" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.17332 4.69291L5.03998 5.87958C4.55998 6.14624 4.15997 6.81958 4.15997 7.37291V9.63291C4.15997 10.1862 4.55331 10.8596 5.03998 11.1262L7.17332 12.3129C7.62665 12.5662 8.37331 12.5662 8.83331 12.3129L10.9667 11.1262C11.4467 10.8596 11.8466 10.1862 11.8466 9.63291V7.36625C11.8466 6.81291 11.4533 6.13958 10.9667 5.87291L8.83331 4.68624C8.37331 4.43291 7.62665 4.43291 7.17332 4.69291Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6667 10.5C14.6667 13.08 12.58 15.1667 10 15.1667L10.7 14" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.33331 6.49967C1.33331 3.91967 3.41998 1.83301 5.99998 1.83301L5.29999 2.99967" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="disposal-ico"></i>
or
    <i class="disposal-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.05999 9.35359H6.11999V14.1536C6.11999 15.2736 6.72665 15.5003 7.46665 14.6603L12.5133 8.92692C13.1333 8.22692 12.8733 7.64692 11.9333 7.64692H9.87332V2.84692C9.87332 1.72692 9.26665 1.50026 8.52665 2.34026L3.47999 8.07359C2.86665 8.78026 3.12665 9.35359 4.05999 9.35359Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="daily-action-ico"></i>
or
    <i class="daily-action-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 6.5V9.83333" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99998 14.7735H3.95998C1.64664 14.7735 0.679976 13.1202 1.79998 11.1002L3.87998 7.35352L5.83998 3.83352C7.02664 1.69352 8.97331 1.69352 10.16 3.83352L12.12 7.36018L14.2 11.1068C15.32 13.1268 14.3466 14.7802 12.04 14.7802H7.99998V14.7735Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99634 11.833H8.00233" stroke="#CACEDE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="alert-action-ico"></i>
or
    <i class="alert-action-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3334 5.99967V12.4997C13.3334 14.4997 12.14 15.1663 10.6667 15.1663H5.33335C3.86002 15.1663 2.66669 14.4997 2.66669 12.4997V5.99967C2.66669 3.83301 3.86002 3.33301 5.33335 3.33301C5.33335 3.74634 5.5 4.11967 5.77334 4.39301C6.04667 4.66634 6.42002 4.83301 6.83335 4.83301H9.16669C9.99335 4.83301 10.6667 4.15967 10.6667 3.33301C12.14 3.33301 13.3334 3.83301 13.3334 5.99967Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6666 3.33301C10.6666 4.15967 9.99331 4.83301 9.16665 4.83301H6.83331C6.41998 4.83301 6.04663 4.66634 5.7733 4.39301C5.49996 4.11967 5.33331 3.74634 5.33331 3.33301C5.33331 2.50634 6.00665 1.83301 6.83331 1.83301H9.16665C9.57998 1.83301 9.95333 1.99968 10.2267 2.27301C10.5 2.54634 10.6666 2.91967 10.6666 3.33301Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.33331 9.16699H7.99998" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.33331 11.833H10.6666" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="general-report-ico"></i>
or
    <i class="general-report-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33331 1.83301V3.83301" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 1.83301V3.83301" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 2.83301C12.8867 2.95301 14 3.79967 14 6.93301V11.053C14 13.7997 13.3333 15.173 10 15.173H6C2.66667 15.173 2 13.7997 2 11.053V6.93301C2 3.79967 3.11333 2.95967 5.33333 2.83301H10.6667Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.8334 12.2334H2.16669" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99998 6C7.17998 6 6.48665 6.44667 6.48665 7.31333C6.48665 7.72667 6.67998 8.04 6.97331 8.24C6.56665 8.48 6.33331 8.86667 6.33331 9.32C6.33331 10.1467 6.96665 10.66 7.99998 10.66C9.02665 10.66 9.66665 10.1467 9.66665 9.32C9.66665 8.86667 9.43331 8.47333 9.01998 8.24C9.31998 8.03333 9.50665 7.72667 9.50665 7.31333C9.50665 6.44667 8.81998 6 7.99998 6ZM7.99998 7.89333C7.65331 7.89333 7.39998 7.68667 7.39998 7.36C7.39998 7.02667 7.65331 6.83333 7.99998 6.83333C8.34665 6.83333 8.59998 7.02667 8.59998 7.36C8.59998 7.68667 8.34665 7.89333 7.99998 7.89333ZM7.99998 9.83333C7.55998 9.83333 7.23998 9.61333 7.23998 9.21333C7.23998 8.81333 7.55998 8.6 7.99998 8.6C8.43998 8.6 8.75998 8.82 8.75998 9.21333C8.75998 9.61333 8.43998 9.83333 7.99998 9.83333Z" fill="#CACEDE"/>
</svg>

</summary>
</div>

```html 
    <i class="daily-report-ico"></i>
or
    <i class="daily-report-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33331 1.83301V3.83301" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 1.83301V3.83301" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.33331 6.55957H13.6666" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 6.16634V11.833C14 13.833 13 15.1663 10.6667 15.1663H5.33333C3 15.1663 2 13.833 2 11.833V6.16634C2 4.16634 3 2.83301 5.33333 2.83301H10.6667C13 2.83301 14 4.16634 14 6.16634Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.4632 9.63314H10.4691" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.4632 11.6331H10.4691" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99697 9.63314H8.00296" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99697 11.6331H8.00296" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.52956 9.63314H5.53555" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.52956 11.6331H5.53555" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="monthly-report-ico"></i>
or
    <i class="monthly-report-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.99998 15.1663H9.99998C13.3333 15.1663 14.6666 13.833 14.6666 10.4997V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 12.8334V10.2334" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 5.46699V4.16699" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 8.93346C11.3373 8.93346 12.1133 8.15742 12.1133 7.20013C12.1133 6.24284 11.3373 5.4668 10.38 5.4668C9.42271 5.4668 8.64667 6.24284 8.64667 7.20013C8.64667 8.15742 9.42271 8.93346 10.38 8.93346Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.62 12.8332V11.5332" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.62 6.76699V4.16699" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.61999 11.5331C6.57728 11.5331 7.35332 10.757 7.35332 9.79974C7.35332 8.84245 6.57728 8.06641 5.61999 8.06641C4.6627 8.06641 3.88666 8.84245 3.88666 9.79974C3.88666 10.757 4.6627 11.5331 5.61999 11.5331Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html
    <i class="custom-report-ico"></i>
or
    <i class="custom-report-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.7133 3.78634L3.28664 13.213C2.07997 12.0063 1.33331 10.3397 1.33331 8.49967C1.33331 4.81967 4.31998 1.83301 7.99998 1.83301C9.83998 1.83301 11.5067 2.57967 12.7133 3.78634Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6667 8.50044C14.6667 12.1804 11.68 15.1671 8.00002 15.1671C6.16002 15.1671 4.49335 14.4204 3.28668 13.2138L12.7134 3.78711C13.92 4.99378 14.6667 6.66044 14.6667 8.50044Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.17334 11.3271L8.93998 15.1005" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.52667 8.97363L11.9134 13.3536" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.88666 6.61328L14.08 10.8133" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="action-parameter-ico"></i>
or
    <i class="action-parameter-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 10.5C9.10457 10.5 10 9.60457 10 8.5C10 7.39543 9.10457 6.5 8 6.5C6.89543 6.5 6 7.39543 6 8.5C6 9.60457 6.89543 10.5 8 10.5Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.33331 9.0863V7.91297C1.33331 7.21963 1.89998 6.6463 2.59998 6.6463C3.80665 6.6463 4.29998 5.79297 3.69331 4.7463C3.34665 4.1463 3.55331 3.3663 4.15998 3.01963L5.31331 2.35963C5.83998 2.0463 6.51998 2.23297 6.83331 2.75963L6.90665 2.8863C7.50665 3.93297 8.49331 3.93297 9.09998 2.8863L9.17331 2.75963C9.48665 2.23297 10.1666 2.0463 10.6933 2.35963L11.8466 3.01963C12.4533 3.3663 12.66 4.1463 12.3133 4.7463C11.7066 5.79297 12.2 6.6463 13.4066 6.6463C14.1 6.6463 14.6733 7.21297 14.6733 7.91297V9.0863C14.6733 9.77963 14.1066 10.353 13.4066 10.353C12.2 10.353 11.7066 11.2063 12.3133 12.253C12.66 12.8596 12.4533 13.633 11.8466 13.9796L10.6933 14.6396C10.1666 14.953 9.48665 14.7663 9.17331 14.2396L9.09998 14.113C8.49998 13.0663 7.51331 13.0663 6.90665 14.113L6.83331 14.2396C6.51998 14.7663 5.83998 14.953 5.31331 14.6396L4.15998 13.9796C3.55331 13.633 3.34665 12.853 3.69331 12.253C4.29998 11.2063 3.80665 10.353 2.59998 10.353C1.89998 10.353 1.33331 9.77963 1.33331 9.0863Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="general-settings-ico"></i>
or
    <i class="general-settings-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.99998 15.1663H9.99998C13.3333 15.1663 14.6666 13.833 14.6666 10.4997V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 12.8334V10.2334" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 5.46699V4.16699" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.38 8.93346C11.3373 8.93346 12.1133 8.15742 12.1133 7.20013C12.1133 6.24284 11.3373 5.4668 10.38 5.4668C9.42271 5.4668 8.64667 6.24284 8.64667 7.20013C8.64667 8.15742 9.42271 8.93346 10.38 8.93346Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.62 12.8332V11.5332" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.62 6.76699V4.16699" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.61999 11.5331C6.57728 11.5331 7.35332 10.757 7.35332 9.79974C7.35332 8.84245 6.57728 8.06641 5.61999 8.06641C4.6627 8.06641 3.88666 8.84245 3.88666 9.79974C3.88666 10.757 4.6627 11.5331 5.61999 11.5331Z" stroke="#CACEDE" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="app-settings-ico"></i>
or
    <i class="app-settings-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="ic:twotone-arrow-back">
<path id="Vector" d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="#CACEDE"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="arrow-back-ico"></i>
or
    <i class="arrow-back-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.0003 13.172L16.9503 8.222L18.3643 9.636L12.0003 16L5.63626 9.636L7.05126 8.222L12.0013 13.172H12.0003Z" fill="#CACEDE"/>
</svg>

</summary>
</div>

```html 
    <i class="arrow-down-ico"></i>
or
    <i class="arrow-down-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.25 2.5H12.1667C14.0335 2.5 14.9669 2.5 15.68 2.86331C16.3072 3.18289 16.8171 3.69282 17.1367 4.32003C17.5 5.03307 17.5 5.96649 17.5 7.83333V13.75M5.16667 17.5H11.9167C12.8501 17.5 13.3168 17.5 13.6733 17.3183C13.9869 17.1586 14.2419 16.9036 14.4017 16.59C14.5833 16.2335 14.5833 15.7668 14.5833 14.8333V8.08333C14.5833 7.14991 14.5833 6.6832 14.4017 6.32668C14.2419 6.01308 13.9869 5.75811 13.6733 5.59832C13.3168 5.41667 12.8501 5.41667 11.9167 5.41667H5.16667C4.23325 5.41667 3.76654 5.41667 3.41002 5.59832C3.09641 5.75811 2.84144 6.01308 2.68166 6.32668C2.5 6.6832 2.5 7.14991 2.5 8.08333V14.8333C2.5 15.7668 2.5 16.2335 2.68166 16.59C2.84144 16.9036 3.09641 17.1586 3.41002 17.3183C3.76654 17.5 4.23325 17.5 5.16667 17.5Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="copy-ico"></i>
or
    <i class="copy-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="trash-01">
    <path id="Icon" d="M13.3333 5.00008V4.33341C13.3333 3.39999 13.3333 2.93328 13.1517 2.57676C12.9919 2.26316 12.7369 2.00819 12.4233 1.8484C12.0668 1.66675 11.6001 1.66675 10.6667 1.66675H9.33333C8.39991 1.66675 7.9332 1.66675 7.57668 1.8484C7.26308 2.00819 7.00811 2.26316 6.84832 2.57676C6.66667 2.93328 6.66667 3.39999 6.66667 4.33341V5.00008M8.33333 9.58342V13.7501M11.6667 9.58342V13.7501M2.5 5.00008H17.5M15.8333 5.00008V14.3334C15.8333 15.7335 15.8333 16.4336 15.5608 16.9684C15.3212 17.4388 14.9387 17.8212 14.4683 18.0609C13.9335 18.3334 13.2335 18.3334 11.8333 18.3334H8.16667C6.76654 18.3334 6.06647 18.3334 5.53169 18.0609C5.06129 17.8212 4.67883 17.4388 4.43915 16.9684C4.16667 16.4336 4.16667 15.7335 4.16667 14.3334V5.00008" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>



</summary>
</div>

```html 
    <i class="delete-ico"></i>
or
    <i class="delete-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="edit-01">
<path id="Icon" d="M2.39662 15.0963C2.43491 14.7517 2.45405 14.5794 2.50618 14.4184C2.55243 14.2755 2.61778 14.1396 2.70045 14.0142C2.79363 13.8729 2.91621 13.7503 3.16136 13.5052L14.1666 2.49992C15.0871 1.57945 16.5795 1.57945 17.4999 2.49993C18.4204 3.4204 18.4204 4.91279 17.4999 5.83326L6.49469 16.8385C6.24954 17.0836 6.12696 17.2062 5.98566 17.2994C5.86029 17.3821 5.72433 17.4474 5.58146 17.4937C5.42042 17.5458 5.24813 17.5649 4.90356 17.6032L2.08325 17.9166L2.39662 15.0963Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="edit-ico"></i>
or
    <i class="edit-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.5H12" stroke="#CACEDE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 8.5L4 8.5" stroke="#CACEDE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="minus-ico"></i>
or
    <i class="minus-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.5H12" stroke="#CACEDE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 12.5L8 4.5" stroke="#CACEDE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="plus-ico"></i>
or
    <i class="plus-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_727_56572)">
<path d="M15 5.83366V4.33366C15 3.40024 15 2.93353 14.8183 2.57701C14.6585 2.2634 14.4035 2.00844 14.0899 1.84865C13.7334 1.66699 13.2667 1.66699 12.3333 1.66699H7.66663C6.73321 1.66699 6.2665 1.66699 5.90998 1.84865C5.59637 2.00844 5.3414 2.2634 5.18162 2.57701C4.99996 2.93353 4.99996 3.40024 4.99996 4.33366V5.83366M4.99996 15.0003C4.22498 15.0003 3.83749 15.0003 3.51958 14.9151C2.65685 14.684 1.98298 14.0101 1.75181 13.1474C1.66663 12.8295 1.66663 12.442 1.66663 11.667V9.83366C1.66663 8.43353 1.66663 7.73346 1.93911 7.19868C2.17879 6.72828 2.56124 6.34583 3.03165 6.10614C3.56643 5.83366 4.26649 5.83366 5.66663 5.83366H14.3333C15.7334 5.83366 16.4335 5.83366 16.9683 6.10614C17.4387 6.34583 17.8211 6.72828 18.0608 7.19868C18.3333 7.73346 18.3333 8.43353 18.3333 9.83366V11.667C18.3333 12.442 18.3333 12.8295 18.2481 13.1474C18.0169 14.0101 17.3431 14.684 16.4803 14.9151C16.1624 15.0003 15.7749 15.0003 15 15.0003M12.5 8.75033H15M7.66663 18.3337H12.3333C13.2667 18.3337 13.7334 18.3337 14.0899 18.152C14.4035 17.9922 14.6585 17.7372 14.8183 17.4236C15 17.0671 15 16.6004 15 15.667V14.3337C15 13.4002 15 12.9335 14.8183 12.577C14.6585 12.2634 14.4035 12.0084 14.0899 11.8486C13.7334 11.667 13.2667 11.667 12.3333 11.667H7.66663C6.73321 11.667 6.2665 11.667 5.90998 11.8486C5.59637 12.0084 5.3414 12.2634 5.18162 12.577C4.99996 12.9335 4.99996 13.4002 4.99996 14.3337V15.667C4.99996 16.6004 4.99996 17.0671 5.18162 17.4236C5.3414 17.7372 5.59637 17.9922 5.90998 18.152C6.2665 18.3337 6.73321 18.3337 7.66663 18.3337Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_727_56572">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

</summary>
</div>

```html 
    <i class="print-ico"></i>
or
    <i class="print-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 17.5L14.5834 14.5833M16.6667 9.58333C16.6667 13.4954 13.4954 16.6667 9.58333 16.6667C5.67132 16.6667 2.5 13.4954 2.5 9.58333C2.5 5.67132 5.67132 2.5 9.58333 2.5C13.4954 2.5 16.6667 5.67132 16.6667 9.58333Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="search-ico"></i>
or
    <i class="search-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.6666 9.16634V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663H8.66665" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6666 9.16634V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663H8.66665" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6666 9.16634V6.49967C14.6666 3.16634 13.3333 1.83301 9.99998 1.83301H5.99998C2.66665 1.83301 1.33331 3.16634 1.33331 6.49967V10.4997C1.33331 13.833 2.66665 15.1663 5.99998 15.1663H8.66665" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 13.453L11.72 14.4997L14 11.833" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.66669 7.5V9.5" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 7.5V9.5" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.3333 7.5V9.5" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</summary>
</div>

```html 
    <i class="milk-production-ico"></i>
or
    <i class="milk-production-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33366 10.6673H2.66699L6.66699 14.6673V1.33398H5.33366V10.6673ZM9.33366 3.33398V14.6673H10.667V5.33398H13.3337L9.33366 1.33398V3.33398Z" fill="#CACEDE"/>
</svg>

</summary>
</div>

```html 
    <i class="sort-ico"></i>
or
    <i class="sort-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="Sort-Ascending">
<path id="Vector" d="M5.33464 10.6673H2.66797L6.66797 14.6673V1.33398H5.33464V10.6673Z" fill="#1C274D"/>
<path id="Vector_2" d="M10.3333 5.33366H13L9 1.33366L9 14.667H10.3333L10.3333 5.33366Z" fill="#CACEDE"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="sort-ascending-ico"></i>
or
    <i class="sort-ascending-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="Sort-Descending">
<path id="Vector" d="M5.33464 10.6673H2.66797L6.66797 14.6673V1.33398H5.33464V10.6673Z" fill="#CACEDE"/>
<path id="Vector_2" d="M10.3333 5.33366H13L9 1.33366L9 14.667H10.3333L10.3333 5.33366Z" fill="#1C274D"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="sort-descending-ico"></i>
or
    <i class="sort-descending-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="download-02">
<path id="Icon" d="M17.5 17.5H2.5M15 9.16667L10 14.1667M10 14.1667L5 9.16667M10 14.1667V2.5" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html
    <i class="download-ico"></i>
or
    <i class="download-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="file-05">
<path id="Icon" d="M11.6654 1.89063V5.33274C11.6654 5.79945 11.6654 6.03281 11.7562 6.21107C11.8361 6.36787 11.9636 6.49535 12.1204 6.57525C12.2986 6.66608 12.532 6.66608 12.9987 6.66608H16.4408M11.6654 14.166H6.66536M13.332 10.8327H6.66536M16.6654 8.32287V14.3327C16.6654 15.7328 16.6654 16.4329 16.3929 16.9677C16.1532 17.4381 15.7707 17.8205 15.3003 18.0602C14.7656 18.3327 14.0655 18.3327 12.6654 18.3327H7.33203C5.9319 18.3327 5.23183 18.3327 4.69705 18.0602C4.22665 17.8205 3.8442 17.4381 3.60451 16.9677C3.33203 16.4329 3.33203 15.7328 3.33203 14.3327V5.66602C3.33203 4.26588 3.33203 3.56582 3.60451 3.03104C3.8442 2.56063 4.22665 2.17818 4.69705 1.9385C5.23183 1.66602 5.9319 1.66602 7.33203 1.66602H10.0085C10.62 1.66602 10.9257 1.66602 11.2134 1.73509C11.4685 1.79633 11.7124 1.89734 11.9361 2.03442C12.1884 2.18902 12.4046 2.40521 12.8369 2.83759L15.4938 5.49444C15.9262 5.92682 16.1424 6.14301 16.297 6.3953C16.434 6.61898 16.535 6.86285 16.5963 7.11794C16.6654 7.40566 16.6654 7.71139 16.6654 8.32287Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="excel-ico"></i>
or
    <i class="excel-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="file-07">
<path id="Icon" d="M11.6654 1.8916V5.33372C11.6654 5.80043 11.6654 6.03378 11.7562 6.21204C11.8361 6.36885 11.9636 6.49633 12.1204 6.57622C12.2986 6.66705 12.532 6.66705 12.9987 6.66705H16.4408M6.66536 12.5003V15.0003M13.332 10.8337V15.0003M9.9987 8.75033V15.0003M16.6654 8.32385V14.3337C16.6654 15.7338 16.6654 16.4339 16.3929 16.9686C16.1532 17.439 15.7707 17.8215 15.3003 18.0612C14.7656 18.3337 14.0655 18.3337 12.6654 18.3337H7.33203C5.9319 18.3337 5.23183 18.3337 4.69705 18.0612C4.22665 17.8215 3.8442 17.439 3.60451 16.9686C3.33203 16.4339 3.33203 15.7338 3.33203 14.3337V5.66699C3.33203 4.26686 3.33203 3.5668 3.60451 3.03202C3.8442 2.56161 4.22665 2.17916 4.69705 1.93948C5.23183 1.66699 5.9319 1.66699 7.33203 1.66699H10.0085C10.62 1.66699 10.9257 1.66699 11.2134 1.73607C11.4685 1.79731 11.7124 1.89832 11.9361 2.03539C12.1884 2.19 12.4046 2.40619 12.8369 2.83857L15.4938 5.49542C15.9262 5.9278 16.1424 6.14399 16.297 6.39628C16.434 6.61996 16.535 6.86382 16.5963 7.11891C16.6654 7.40663 16.6654 7.71237 16.6654 8.32385Z" stroke="#CACEDE" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="pdf-ico"></i>
or
    <i class="pdf-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="briefcase-01">
<path id="Icon" d="M10.6667 4.66667C10.6667 4.04669 10.6667 3.7367 10.5986 3.48236C10.4136 2.79218 9.87453 2.25308 9.18434 2.06815C8.93001 2 8.62002 2 8.00004 2C7.38006 2 7.07007 2 6.81574 2.06815C6.12555 2.25308 5.58646 2.79218 5.40152 3.48236C5.33337 3.7367 5.33337 4.04669 5.33337 4.66667M3.46671 14H12.5334C13.2801 14 13.6535 14 13.9387 13.8547C14.1896 13.7268 14.3936 13.5229 14.5214 13.272C14.6667 12.9868 14.6667 12.6134 14.6667 11.8667V6.8C14.6667 6.05326 14.6667 5.6799 14.5214 5.39468C14.3936 5.1438 14.1896 4.93982 13.9387 4.81199C13.6535 4.66667 13.2801 4.66667 12.5334 4.66667H3.46671C2.71997 4.66667 2.3466 4.66667 2.06139 4.81199C1.8105 4.93982 1.60653 5.1438 1.4787 5.39468C1.33337 5.6799 1.33337 6.05326 1.33337 6.8V11.8667C1.33337 12.6134 1.33337 12.9868 1.4787 13.272C1.60653 13.5229 1.8105 13.7268 2.06139 13.8547C2.3466 14 2.71997 14 3.46671 14Z" stroke="#CACEDE" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="briefcase-ico"></i>
or
    <i class="briefcase-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="eye">
<g id="Icon">
<path d="M2.01677 10.5937C1.90328 10.414 1.84654 10.3241 1.81477 10.1855C1.79091 10.0814 1.79091 9.91727 1.81477 9.81317C1.84654 9.67458 1.90328 9.58473 2.01677 9.40503C2.95461 7.92005 5.74617 4.16602 10.0003 4.16602C14.2545 4.16602 17.0461 7.92005 17.9839 9.40503C18.0974 9.58473 18.1541 9.67458 18.1859 9.81317C18.2098 9.91727 18.2098 10.0814 18.1859 10.1855C18.1541 10.3241 18.0974 10.414 17.9839 10.5937C17.0461 12.0786 14.2545 15.8327 10.0003 15.8327C5.74617 15.8327 2.95461 12.0786 2.01677 10.5937Z" stroke="#CACEDE" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.0003 12.4993C11.381 12.4993 12.5003 11.3801 12.5003 9.99935C12.5003 8.61864 11.381 7.49935 10.0003 7.49935C8.61962 7.49935 7.50034 8.61864 7.50034 9.99935C7.50034 11.3801 8.61962 12.4993 10.0003 12.4993Z" stroke="#CACEDE" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
</svg>

</summary>
</div>

```html 
    <i class="eye-ico"></i>
or
    <i class="eye-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="eye-off">
<path id="Icon" d="M8.95245 4.2436C9.29113 4.19353 9.64051 4.16667 10.0003 4.16667C14.2545 4.16667 17.0461 7.9207 17.9839 9.40569C18.0974 9.58542 18.1542 9.67528 18.1859 9.81389C18.2098 9.91799 18.2098 10.0822 18.1859 10.1863C18.1541 10.3249 18.097 10.4154 17.9827 10.5963C17.7328 10.9918 17.3518 11.5476 16.8471 12.1504M5.6036 5.59586C3.80187 6.81808 2.57871 8.51615 2.01759 9.4044C1.90357 9.58489 1.84656 9.67514 1.81478 9.81373C1.79091 9.91783 1.7909 10.082 1.81476 10.1861C1.84652 10.3247 1.90328 10.4146 2.01678 10.5943C2.95462 12.0793 5.74618 15.8333 10.0003 15.8333C11.7157 15.8333 13.1932 15.223 14.4073 14.3972M2.50035 2.5L17.5003 17.5M8.23258 8.23223C7.78017 8.68464 7.50035 9.30964 7.50035 10C7.50035 11.3807 8.61963 12.5 10.0003 12.5C10.6907 12.5 11.3157 12.2202 11.7681 11.7678" stroke="#CACEDE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="eye-off-ico"></i>
or
    <i class="eye-off-ico-vac"></i>
```

<div id="container">
<summary>
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="layout-alt-02">
<path id="Icon" d="M14.5833 9.16667H10.4167M14.5833 12.5H10.4167M14.5833 5.83333H10.4167M7.5 2.5L7.5 17.5M6.5 2.5H13.5C14.9001 2.5 15.6002 2.5 16.135 2.77248C16.6054 3.01217 16.9878 3.39462 17.2275 3.86502C17.5 4.3998 17.5 5.09987 17.5 6.5V13.5C17.5 14.9001 17.5 15.6002 17.2275 16.135C16.9878 16.6054 16.6054 16.9878 16.135 17.2275C15.6002 17.5 14.9001 17.5 13.5 17.5H6.5C5.09987 17.5 4.3998 17.5 3.86502 17.2275C3.39462 16.9878 3.01217 16.6054 2.77248 16.135C2.5 15.6002 2.5 14.9001 2.5 13.5V6.5C2.5 5.09987 2.5 4.3998 2.77248 3.86502C3.01217 3.39462 3.39462 3.01217 3.86502 2.77248C4.3998 2.5 5.09987 2.5 6.5 2.5Z" stroke="#CACEDE" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

</summary>
</div>

```html 
    <i class="list-ico"></i>
or
    <i class="list-ico-vac"></i>
```






