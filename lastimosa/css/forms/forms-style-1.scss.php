/* Forms Style 1 */
/*--------------------------------------------------------------
6.0 Forms
--------------------------------------------------------------*/

label {
	display: block;
}

.search-form label,
.post-password-form label {
    display: inline-block;
}

fieldset {
	margin-bottom: 1em;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: #666;
	background: #fff;
	background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
	border: 1px solid #bbb;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	padding: 0.7em;
	width: 100%;
    font-weight:normal;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	color: #222;
	border-color: #333;
}

select {
	border: 1px solid #bbb;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	height: 3em;
	max-width: 100%;
}

input[type="radio"],
input[type="checkbox"] {
	margin-right: 0.5em;
}

button,
input[type="button"],
input[type="submit"] {
	background-color: #222;
	border: 0;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff;
	cursor: pointer;
	display: inline-block;
    font-weight:normal;
    padding: 12px 30px;
	text-shadow: none;
	-webkit-transition: background 0.2s;
	transition: background 0.2s;
}

input + button,
input + input[type="button"],
input + input[type="submit"] {
	padding: 0.75em 2em;
}

button.secondary,
input[type="reset"],
input[type="button"].secondary,
input[type="reset"].secondary,
input[type="submit"].secondary {
	background-color: #ddd;
	color: #222;
}

button:hover,
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus {
	background: #767676;
}

button.secondary:hover,
button.secondary:focus,
input[type="reset"]:hover,
input[type="reset"]:focus,
input[type="button"].secondary:hover,
input[type="button"].secondary:focus,
input[type="reset"].secondary:hover,
input[type="reset"].secondary:focus,
input[type="submit"].secondary:hover,
input[type="submit"].secondary:focus {
	background: #bbb;
}

/* Placeholder text color -- selectors need to be separate to work. */
::-webkit-input-placeholder {
	color: #333;
}

:-moz-placeholder {
	color: #333;
}

::-moz-placeholder {
	color: #333;
	opacity: 1;
	/* Since FF19 lowers the opacity of the placeholder by default */
}

:-ms-input-placeholder {
	color: #333;
}
/* End of Forms Style 1 */