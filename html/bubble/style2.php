<?php
header('Content-type: text/css');

function issetor(&$var, $def){
    return isset($var) ? $var : $def;
}
?>
.triangle-border {
    position:relative;
    padding:15px;
    /*margin:1em 0 3em;*/
    margin:0;
    border:5px solid #5a8f00;
    color:#333;
    background:#fff;
    
    /* css3 */
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    border-radius:10px;
}

/* Variant : for left positioned triangle
   ------------------------------------------ */

.triangle-border.left {
    margin-left:30px;
}

/* Variant : for right positioned triangle
   ------------------------------------------ */

.triangle-border.right {
    margin-right:30px;
}

/* THE TRIANGLE
   ------------------------------------------------------------------------------------------------------------------------------- */

.triangle-border:before {
    content:"";
    display:block; /* reduce the damage in FF3.0 */
    position:absolute;
    bottom:-40px; /* value = - border-top-width - border-bottom-width */
    left:40px; /* controls horizontal position */
    width:0;
    height:0;
    border:20px solid transparent;
    border-top-color:#5a8f00;
}

/* creates the smaller  triangle */
.triangle-border:after {
    content:"";
    display:block; /* reduce the damage in FF3.0 */
    position:absolute;
    bottom:-26px; /* value = - border-top-width - border-bottom-width */
    left:47px; /* value = (:before left) + (:before border-left) - (:after border-left) */
    width:0;
    height:0;
    border:13px solid transparent;
    border-top-color:#fff;
}

/* Variant : top
   ------------------------------------------ */

/* creates the larger triangle */
.triangle-border.top:before {
    top:-40px; /* value = - border-top-width - border-bottom-width */
    right:40px; /* controls horizontal position */
    bottom:auto;
    left:auto;
    border:20px solid transparent;
    border-bottom-color:#5a8f00;
}

/* creates the smaller  triangle */
.triangle-border.top:after {
    top:-26px; /* value = - border-top-width - border-bottom-width */
    right:47px; /* value = (:before right) + (:before border-right) - (:after border-right) */
    bottom:auto;
    left:auto;
    border:13px solid transparent;
    border-bottom-color:#fff;
}

/* Variant : left
   ------------------------------------------ */

/* creates the larger triangle */
.triangle-border.left:before {
    top:10px; /* controls vertical position */
    left:-30px; /* value = - border-left-width - border-right-width */
    bottom:auto;
    border-width:15px 30px 15px 0;
    border-style:solid;
    border-color:transparent #5a8f00;
}

/* creates the smaller  triangle */
.triangle-border.left:after {
    top:16px; /* value = (:before top) + (:before border-top) - (:after border-top) */
    left:-21px; /* value = - border-left-width - border-right-width */
    bottom:auto;
    border-width:9px 21px 9px 0;
    border-style:solid;
    border-color:transparent #fff;
}

/* Variant : right
   ------------------------------------------ */

/* creates the larger triangle */
.triangle-border.right:before {
    top:10px; /* controls vertical position */
    right:-30px; /* value = - border-left-width - border-right-width */
    bottom:auto;
    left:auto;
    border-width:15px 0 15px 30px;
    border-style:solid;
    border-color:transparent #5a8f00;
}

/* creates the smaller  triangle */
.triangle-border.right:after {
    top:16px; /* value = (:before top) + (:before border-top) - (:after border-top) */
    right:-21px; /* value = - border-left-width - border-right-width */
    bottom:auto;
    left:auto;
    border-width:9px 0 9px 21px;
    border-style:solid;
    border-color:transparent #fff;
}
