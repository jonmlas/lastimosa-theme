<?php 
	$theme_layout = lastimosa_get_option('theme_layout');		
?>
$comment-width: <?php echo $theme_layout['container-width']; ?>;

.comments-area {
	width:100%;
    max-width:$comment-width;
    margin:0 auto;
}


.comment-reply-title,
.comments-title {
	margin: 0;
	text-transform: uppercase;
}
#commentform {
    max-width: 550px;
}
.comment-list {
	list-style: none;
	margin: 0 0 48px 0;
}

.comment-author {
	font-size: 14px;
	line-height: 1.7142857142;
}

.comment-list .reply,
.comment-metadata {
	font-size: 12px;
	line-height: 2;
	text-transform: uppercase;
}

.comment-list .reply {
	margin-top: 24px;
}

.comment-author .fn {
	font-weight: 900;
}

.comment-author a {
	color: #2b2b2b;
}

.comment-list .trackback a,
.comment-list .pingback a,
.comment-metadata a {
	color: #767676;
}

.comment-author a:hover,
.comment-list .pingback a:hover,
.comment-list .trackback a:hover,
.comment-metadata a:hover {
	color: #41a62a;
}

.comment-list article,
.comment-list .pingback,
.comment-list .trackback {
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-bottom: 24px;
	padding-top: 24px;
}

.comment-list > li:first-child > article,
.comment-list > .pingback:first-child,
.comment-list > .trackback:first-child {
	border-top: 0;
}

.comment-author {
	position: relative;
}

.comment-author .avatar {
	border: 1px solid rgba(0, 0, 0, 0.1);
	height: 18px;
	padding: 2px;
	position: absolute;
	top: 0;
	left: 0;
	width: 18px;
}

.bypostauthor > article .fn:before {
	content: "\f408";
	margin: 0 2px 0 -2px;
	position: relative;
	top: -1px;
}

.says {
	display: none;
}

.comment-author,
.comment-awaiting-moderation,
.comment-content,
.comment-list .reply,
.comment-metadata {
	padding-left: 30px;
}

.comment-edit-link {
	margin-left: 10px;
}

.comment-edit-link:before {
	content: "\f411";
}

.comment-reply-link:before,
.comment-reply-login:before {
	content: "\f412";
	margin-right: 2px;
}

.comment-content {
	-webkit-hyphens: auto;
	-moz-hyphens: auto;
	-ms-hyphens: auto;
	hyphens: auto;
	word-wrap: break-word;
}

.comment-content ul,
.comment-content ol {
	margin: 0 0 24px 22px;
}

.comment-content li > ul,
.comment-content li > ol {
	margin-bottom: 0;
}

.comment-content > :last-child {
	margin-bottom: 0;
}

.comment-list .children {
	list-style: none;
	margin-left: 15px;
}

.comment-respond {
	margin-bottom: 24px;
	padding: 0;
}

.comment .comment-respond {
	margin-top: 24px;
}

.comment-respond h3 {
	margin-top: 0;
}

.comment-notes,
.comment-awaiting-moderation,
.logged-in-as,
.no-comments,
.form-allowed-tags,
.form-allowed-tags code {
	color: #999;
}

.comment-notes,
.comment-awaiting-moderation,
.logged-in-as {
	font-size: 14px;
	line-height: 1.7142857142;
}

.no-comments {
	font-size: 16px;
	font-weight: 900;
	line-height: 1.5;
	margin-top: 24px;
	text-transform: uppercase;
}

.comment-form label {
	display: block;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"] {
	width: 100%;
}

.form-allowed-tags,
.form-allowed-tags code {
	font-size: 12px;
	line-height: 1.5;
}

.required {
	color: #c0392b;
}

.comment-reply-title small a {
	color: #2b2b2b;
	float: right;
	height: 24px;
	overflow: hidden;
	width: 24px;
}

.comment-reply-title small a:hover {
	color: #41a62a;
}

.comment-reply-title small a:before {
	content: "\f405";
	font-size: 32px;
}

.comment-navigation {
	font-size: 12px;
	line-height: 2;
	margin-bottom: 48px;
	text-transform: uppercase;
}

.comment-navigation .nav-next,
.comment-navigation .nav-previous {
	display: inline-block;
}

.comment-navigation .nav-previous a {
	margin-right: 10px;
}

#comment-nav-above {
	margin-top: 36px;
	margin-bottom: 0;
}