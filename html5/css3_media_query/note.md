# 1. 三栏布局

## HTML布局
```html
<div class="box">
    <div class="left">left</div>
    <div class="center">center</div>
    <div class="right">right</div>
</div>
```

## CSS样式

```css
*{
    padding: 0;
    margin: 0;
}
.box{
    position: relative;
}
.left{
    width: 100px;
    background-color: #f00;
    position: absolute;
    left: 0;
    top: 0;
}
.center{
    margin: 0 200px 0 100px;
    background-color: #000;
    color: #fff;
}
.right{
    width: 200px;
    background-color: #f90;
    position: absolute;
    right: 0;
    top: 0;
}
```


# 2. 清除浮动

## HTML布局

```html
<ul class='clearFix'>
 ...
</ul>
```

## CSS样式

```css
.clearFix{
    zoom: 1; /*兼容IE*/
}
.clearFix:after{
    content: "";
    display: block;
    clear: both;
}
```

