<?php
/**
 * @author SAPSAN
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */
?>
<style>
     .menu .nav a {
        color: var(--default-text-color);
        margin-left: 15px;
        outline: none;
    }

    .menu .nav li {
        display: block;
        width: 100%;
        padding: 10px;
        cursor: pointer;
        font-weight: var(--font-weight-3);
        font-size: 12px;
    }

    .menu .nav li:hover {
        color: var(--default-text-color);
        background-color: var(--hover);
    }

    .menu .nav .active {
        color: var(--default-text-color);
        background-color: var(--hover);
    }

    .menu-header {
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .menu-header h5 {
        font-weight: var(--font-weight-3);
        font-size: 18px;
        margin-bottom: 20px;
    }

    .align-center
    {
        margin: 25px auto;
        padding: 25px;
        border: 2px solid var(--span-color);
        box-shadow: var(--span-color-back) 5px 5px;
        border-radius: 2px;
    }
    
    .input-form
    {
        margin-bottom: 10px
    }

    .dd-handle
    {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px;
        color: var(--default-text-color);
        text-decoration: none;
        font-weight: bold;
        background: var(--hover);
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        transition: all 0.3s ease;
    }

    .module_setting 
    {
        float: right;
        padding-top: 6px;
        padding-left: 6px;
        padding-right: 6px;
        opacity: .2;
    }

    .module_setting:hover
    {
        opacity: 1;
        transition: all 0.3s ease;
    }

    a {
        color: var(--span-color);
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }
    .input-form 
    {
        position: relative;
        text-align: left;
        margin-top: 6px;
        margin-bottom: 6px;
        width: 100%;
    }
    .input-form input 
    {
	    font-size: 15px;
	    font-weight: var(--font-weight-2);
	    color: var(--default-text-color);
	    background-color: inherit;
	    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
	    -o-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
	    border-bottom: 2px solid var(--table-line);
	    width: 100%;
	}
	.input-form .border-checkbox-label 
	{
	    position: relative;
	    width: 100%;
	    cursor: pointer;
	    line-height: 22px;
	    margin-top: 4px;
	    padding-left: 30px;
	    color: var(--top-text-color);
	    font-size: 12px;
	    font-weight: var(--font-weight-2);
	}
	.input-form label 
	{
	    float: left;
	    white-space: nowrap;
	    width: 19%;
	    margin-right: 20px;
	}
	[role=button], a, area,
	button, input, label, 
	select, summary, textarea 
	{
	    -ms-touch-action: manipulation;
	    touch-action: manipulation;
	}

	 .border-checkbox:checked+.border-checkbox-label:after
	 {
        -webkit-animation: check linear 0.5s;
        animation: check linear 0.5s;
        opacity: 1;
        border-color: #f37c00
    }

    .input-form .border-checkbox-label 
    {
        position: relative;
        width: 100%;
        cursor: pointer;
        line-height: 22px;
        margin-top: 4px;
        margin-bottom: 15px;
        padding-left: 30px;
        color: var(--top-text-color);
        font-size: 12px;
        font-weight: var(--font-weight-2);
    }

    .input-form .border-checkbox-label:after 
    {
        content: "";
        display: block;
        width: 5px;
        height: 13px;
        opacity: .15;
        border-right: 2px solid var(--default-text-color);
        border-top: 2px solid var(--default-text-color);
        position: absolute;
        left: 5px;
        top: 13px;
        -webkit-transform: scaleX(-1) rotate(135deg);
        transform: scaleX(-1) rotate(135deg);
        -webkit-transform-origin: left top;
        transform-origin: left top
    }

    .input-form .border-checkbox-label:before 
    {
        content: "";
        display: block;
        border: 2px solid #3a3a3a;;
        width: 23px;
        height: 23px;
        position: absolute;
        left: 0
    }

    .border-checkbox 
    {
        display: none
    }

    .border-checkbox:disabled~.border-checkbox-label 
    {
        cursor: no-drop;
        color: #ccc
    }

    @-webkit-keyframes check 
    {
        0% 
        {
            height: 0;
            width: 0
        }
        25% 
        {
            height: 0;
            width: 5px
        }
        50% 
        {
            height: 13px;
            width: 5px
        }
    }

    @keyframes check 
    {
        0% 
        {
            height: 0;
            width: 0
        }
        25% 
        {
            height: 0;
            width: 5px
        }
        50% 
        {
            height: 13px;
            width: 5px
        }
    }
    .sidebar-right .sidebar
    {
    	position: relative;
    	width: 220px;
    }
    .section i 
    {
    	color: var(--default-text-color);
    }
    .sidebar-right 
    {
    	transition: left .3s ease, right .3s ease, box-shadow .3s ease, width .3s ease;
    }
    .unshow
    {
    	width: 0px !important;
    }
    .close
    {
    	bottom: 6px;
	    position: relative;
	    padding-top: unset !important;
	    padding-left: unset !important;
    }
    #notes 
    {
		position: fixed;
		top: 4em;
		right: 5px;
		cursor: default;
		transition: height .45s ease-in-out;
		-webkit-transition: height .45s ease-in-out;
		pointer-events: none;
		z-index: 1001; 
	}
  #notes .note-item {
    max-height: 12em;
    border-radius: 5px;
    opacity: 1;
    will-change: opacity, transform;
    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    width: 50vw;
    -webkit-touch-callout: none;
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    z-index: 1002;
    pointer-events: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-content: flex-start;
    -ms-flex-line-pack: start;
    align-content: flex-start;
    -webkit-box-align: start;
    -ms-flex-align: start;
    -webkit-align-items: flex-start;
    -moz-align-items: flex-start;
    align-items: flex-start;
    -webkit-align-content: flex-start;
    -ms-flex-line-pack: start;
    align-content: flex-start;
    max-width: 20em;
    font: inherit;
    line-height: 1.25em;
    color: #fff;
    margin: 0 auto 3px auto;
    transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -webkit-transform: translateZ(0);
    padding: .75em 1em;
}
    @media all and (max-width: 30em) {
      #notes .note-item {
        width: 75vw;
        max-width: none; } }
    #notes .note-item[data-show="false"] {
      pointer-events: none;
      opacity: 0 !important;
      max-height: 0 !important;
      margin-bottom: 0 !important; }
    #notes .note-item[data-type="info"] {
      background-color: #375e97; }
    #notes .note-item[data-type="warn"] {
      background-color: var(--span-color);
      animation: shake 0.9s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
      -webkit-animation: shake 0.9s cubic-bezier(0.36, 0.07, 0.19, 0.97) both; }
    #notes .note-item[data-type="error"] {
      background-color: rgba(194, 16, 0, 0.95);
      animation: shake 0.54s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
      -webkit-animation: shake 0.54s cubic-bezier(0.36, 0.07, 0.19, 0.97) both; }
    #notes .note-item[data-type="success"] {
      background-color: #009d09; }
    #notes .note-item .note-item-text {
      flex: auto;
      -webkit-flex: auto;
      -moz-flex: auto;
      -ms-flex: auto;
      padding-right: .5em;
      max-width: calc(100% - 1.25em);
      max-width: -webkit-calc(100% - 1.25em); }
    #notes .note-item .note-item-btn {
      width: 0.25em;
      height: 1.25em;
      position: absolute;
      right: 5px;
      bottom: 15px;
      cursor: pointer;
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiB4bWw6c3BhY2U9InByZXNlcnZlIiBmaWxsPSIjZmZmIj48cGF0aCBkPSJNMTguMyw1LjcxTDE4LjMsNS43MWMtMC4zOS0wLjM5LTEuMDItMC4zOS0xLjQxLDBMMTIsMTAuNTlMNy4xMSw1LjdjLTAuMzktMC4zOS0xLjAyLTAuMzktMS40MSwwbDAsMCBjLTAuMzksMC4zOS0wLjM5LDEuMDIsMCwxLjQxTDEwLjU5LDEyTDUuNywxNi44OWMtMC4zOSwwLjM5LTAuMzksMS4wMiwwLDEuNDFoMGMwLjM5LDAuMzksMS4wMiwwLjM5LDEuNDEsMEwxMiwxMy40MWw0Ljg5LDQuODkgYzAuMzksMC4zOSwxLjAyLDAuMzksMS40MSwwbDAsMGMwLjM5LTAuMzksMC4zOS0xLjAyLDAtMS40MUwxMy40MSwxMmw0Ljg5LTQuODlDMTguNjgsNi43MywxOC42OCw2LjA5LDE4LjMsNS43MXoiLz48L3N2Zz4=) no-repeat 0 0/contain;
      transition: opacity .2s;
      -webkit-transition: opacity .2s; }
      #notes .note-item .note-item-btn:hover {
        opacity: .6; }

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
    -webkit-transform: translate3d(-1px, 0, 0);
    -ms-transform: translate3d(-1px, 0, 0); }
  20%, 80% {
    transform: translate3d(2px, 0 0);
    -webkit-transform: translate3d(2px, 0, 0);
    -ms-transform: translate3d(2px, 0, 0); }
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
    -webkit-transform: translate3d(-4px, 0, 0);
    -ms-transform: translate3d(-4px, 0, 0); }
  40%, 60% {
    transform: translate3d(4px, 0, 0);
    -webkit-transform: translate3d(4px, 0, 0);
    -ms-transform: translate3d(4px, 0, 0); } }

@-webkit-keyframes shake {
  10%, 90% {
    -webkit-transform: translate3d(-1px, 0, 0); }
  20%, 80% {
    -webkit-transform: translate3d(2px, 0, 0); }
  30%, 50%, 70% {
    -webkit-transform: translate3d(-4px, 0, 0) t; }
  40%, 60% {
    -webkit-transform: translate3d(4px, 0, 0); } }

.gateways {
    display: none;
}
.gateways-label{
  position: relative;
  float: unset !important;
  width: 110px !important;
  display: inline-block;
  height: 40px;
  border-radius: 3px; 
  border: 1px solid #ef7826;
  transition: left .5s ease, right .3s ease, opacity .5s ease, width .3s ease, transform .2s ease;
  background-color: var(--span-color);
    box-shadow: var(--span-color-back) 5px 5px;
}
.gateways-label:hover{
  cursor: pointer;
  transform:scale(1.1);
}
input.gateways:checked + label.gateways-label:after{
    -webkit-animation: check linear 0.3s;
    animation: check linear 0.3s;
    position: absolute;
    left: 8px;
    top: -7px;
    width: 100px;
    height: 30px;
    content: "\f26b";
    text-align: right;
    font-size: 40px;
    font-weight: 900;
    font-family: "Material-Design-Iconic-Font";
    border-radius: 5px;
    color: var(--span-color);
    text-shadow: 0px 5px 0px var(--span-color-back);;
    background: transparent;
}
input.gateways:checked + label.gateways-label{
    transform:scale(1.1);
}
</style>