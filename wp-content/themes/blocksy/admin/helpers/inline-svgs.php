<?php

if (! function_exists('blocksy_image_picker_file')) {
function blocksy_image_picker_file( $path ) {
	$svgs = [
		// cart icons
		'cart-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M62.5,44.8l-0.9-19.8c0-1.3-1.1-2.6-2.6-2.6H41c-1.5,0-2.7,1.2-2.7,2.6l-0.8,19.8l0,0c0,1.5,1.1,2.7,2.7,2.7h19.8C61.4,47.5,62.5,46.4,62.5,44.8L62.5,44.8z M59.8,45.2H40.2c-0.2,0-0.4-0.2-0.4-0.4l0.8-19.8l0,0c0-0.2,0.2-0.3,0.4-0.3h18.1c0.2,0,0.4,0.1,0.4,0.3l0,0l0.8,19.8C60.2,45.2,60.2,45.2,59.8,45.2z M53.8,26.8c-0.7,0-1.1,0.5-1.1,1.2v3.2c0,1.4-1.1,2.7-2.7,2.7c-1.4,0-2.7-1.2-2.7-2.7v-3.3c0-0.7-0.5-1.2-1.1-1.2s-1.1,0.5-1.1,1.2v3.3c0,2.7,2.1,4.8,4.8,4.8s4.8-2.1,4.8-4.8v-3.3C54.8,27.4,54.3,26.8,53.8,26.8z"/></svg>
		',

		'cart-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M38.4,23.5c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9l0,0h1.7c0.2,0,0.4,0.2,0.4,0.3L44.5,39c0.3,1.2,1.4,2,2.7,2h10.1c1.2,0,2.3-0.8,2.7-2.1l2.5-8.7c0.2-0.5-0.2-1-0.7-1.2c-0.1,0-0.2,0-0.2,0H43.5l-1.2-3.9l0,0c-0.2-1-1.2-1.7-2.2-1.7C40.1,23.5,38.4,23.5,38.4,23.5z M47.6,42.9c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8C49.6,43.7,48.7,42.9,47.6,42.9zM56.9,42.9c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8C58.8,43.7,58,42.9,56.9,42.9z"/></svg>
		',

		'cart-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M45.1,24.2c-0.9,0-1.7,0.5-2.1,1.4l-2.8,6.6h-1.5c-0.4,0-0.7,0.2-0.9,0.4c-0.2,0.3-0.3,0.6-0.2,1l2.9,10.5c0.3,1,1.2,1.7,2.2,1.7h14.7c1,0,1.9-0.7,2.2-1.7l2.9-10.5c0.1-0.3,0-0.7-0.2-1c-0.2-0.3-0.6-0.4-0.9-0.4h-1.5L57,25.6h0c-0.4-0.8-1.2-1.4-2.1-1.4H45.1z M45.1,26.5h9.9l2.4,5.7H42.6L45.1,26.5zM45.5,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C44.3,36.1,44.8,35.6,45.5,35.6z M50,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C48.9,36.1,49.4,35.6,50,35.6zM54.5,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C53.4,36.1,53.9,35.6,54.5,35.6z"/></svg>
		',

		'cart-4' => '<svg width="100%" viewBox="0 0 100 70"><path d="M47.4 22.5c-1.5 0-2.6 1.2-2.6 2.6v2.6h-6.6v17.1c0 1.5 1.2 2.6 2.6 2.6h18.4c1.5 0 2.6-1.2 2.6-2.6v-17h-6.6v-2.6c0-1.5-1.2-2.6-2.6-2.6h-5.2zm-.3 2.3h5.8v3h-5.8v-3zm-6.6 5.4h19v14.9h-19V30.2zm5.6 2.8c-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3 1.3-.6 1.3-1.3-.6-1.3-1.3-1.3zm7.8 0c-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3 1.3-.6 1.3-1.3-.5-1.3-1.3-1.3z"/></svg>
		',

		'cart-5' => '<svg width="100%" viewBox="0 0 100 70"><path d="M61.3 27.8s0-.1-.1-.1c0-.1 0-.1-.1-.2L57.7 23c-.2-.3-.6-.5-.9-.5H43.2c-.4 0-.7.2-.9.5l-3.4 4.5s-.1.1-.1.2c0 0 0 .1-.1.1 0 .1-.1.3-.1.4v15.9c0 1.9 1.5 3.4 3.4 3.4h16c1.9 0 3.4-1.5 3.4-3.4V28.2c0-.2-.1-.3-.1-.4zm-17.6-3h12.5L58 27H42l1.7-2.2zM58 45.2H42c-.6 0-1.1-.5-1.1-1.1V29.3h18.2v14.8c0 .6-.5 1.1-1.1 1.1zm-2.3-12.5c0 3.1-2.5 5.7-5.7 5.7s-5.7-2.5-5.7-5.7c0-.6.5-1.1 1.1-1.1s1.1.5 1.1 1.1c0 1.9 1.5 3.4 3.4 3.4s3.4-1.5 3.4-3.4c0-.6.5-1.1 1.1-1.1s1.3.5 1.3 1.1z"/></svg>
		',

		'cart-6' => '<svg width="100%" viewBox="0 0 100 70"><path d="M63.8 32.7c-.1-.3-.2-.7-.5-.9-.4-.6-1.1-.9-1.8-.9h-2.3l-7-7.3c-.6-.7-1.4-1-2.3-1-.8 0-1.6.3-2.3 1l-7 7.3h-2.3c-.7 0-1.3.3-1.8.9-.3.4-.4.8-.5 1.2v.8l.1.7 1.7 9.4c.4 2.1 2.2 3.7 4.2 3.7h15.8c2.1 0 3.8-1.5 4.2-3.7l1.7-9.4.1-.7v-.5c.1-.2.1-.4 0-.6zM49.1 25c.2-.3.6-.4.9-.4.3 0 .6.1.9.4l5.6 5.9h-13l5.6-5.9zm-4.8 17.7c-.5 0-1-.4-1-1l-.3-4.9v-.1c0-.6.5-1 1-1s.9.4 1 1l.3 4.9c-.1.5-.5 1-1 1.1zm6.7-1.1c0 .6-.4 1-1 1.1-.5 0-1-.5-1-1v-4.9c0-.6.4-1 1-1.1.5 0 1 .5 1 1.1v4.8zm6.1-4.8l-.3 4.9c0 .6-.5 1-1 1s-1-.5-.9-1.1l.3-4.9c0-.5.5-1 1-1s1 .5 1 1c-.1 0-.1.1-.1.1z"/></svg>
		',

		// badge icon
		'badge-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="m47 33.3.9 2.4h-1.8l.9-2.4zM70 25v20H30V25h40zM42.9 36.3c0-.4-.1-.8-.3-1-.2-.3-.4-.5-.7-.7-.3-.2-.8-.3-1.4-.5s-1-.3-1.2-.4c-.1-.1-.2-.2-.2-.4s.1-.3.2-.4c.2-.2.5-.2.9-.2s.6.1.8.2c.2.1.3.4.4.7l1.3-.1c0-.6-.2-1.1-.6-1.4-.4-.4-1-.5-1.8-.5-.5 0-.9.1-1.3.2s-.6.4-.8.7c-.2.3-.3.6-.3.9 0 .5.2.9.6 1.3.3.3.8.5 1.5.6.5.1.9.2 1 .3.2.1.4.2.5.3.1.1.1.2.1.4s-.1.4-.3.6c-.2.2-.5.3-.9.3s-.7-.1-.9-.3c-.2-.2-.4-.5-.5-.9l-1.3.1c.1.7.3 1.3.8 1.6.4.4 1.1.6 1.9.6.6 0 1-.1 1.4-.2.4-.2.7-.4.9-.7s.2-.7.2-1.1zm7.4 1.9-2.6-6.4h-1.4l-2.5 6.4h1.4l.5-1.5h2.6l.6 1.5h1.4zm5.7-1.1h-3.2v-5.3h-1.3v6.4H56v-1.1zm6.3 0h-3.6v-1.8h3.2v-1.1h-3.2v-1.4h3.5v-1.1h-4.8v6.4h4.9v-1z"/></svg>
		',

		'badge-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="m47 33.3.9 2.4h-1.8l.9-2.4zM70 29v12c0 2.2-1.8 4-4 4H34c-2.2 0-4-1.8-4-4V29c0-2.2 1.8-4 4-4h32c2.2 0 4 1.8 4 4zm-27.1 7.3c0-.4-.1-.8-.3-1-.2-.3-.4-.5-.7-.7-.3-.2-.8-.3-1.4-.5s-1-.3-1.2-.4c-.1-.1-.2-.2-.2-.4s.1-.3.2-.4c.2-.2.5-.2.9-.2s.6.1.8.2c.2.1.3.4.4.7l1.3-.1c0-.6-.2-1.1-.6-1.4-.4-.4-1-.5-1.8-.5-.5 0-.9.1-1.3.2s-.6.4-.8.7c-.2.3-.3.6-.3.9 0 .5.2.9.6 1.3.3.3.8.5 1.5.6.5.1.9.2 1 .3.2.1.4.2.5.3.1.1.1.2.1.4s-.1.4-.3.6c-.2.2-.5.3-.9.3s-.7-.1-.9-.3c-.2-.2-.4-.5-.5-.9l-1.3.1c.1.7.3 1.3.8 1.6.4.4 1.1.6 1.9.6.6 0 1-.1 1.4-.2.4-.2.7-.4.9-.7s.2-.7.2-1.1zm7.4 1.9-2.6-6.4h-1.4l-2.5 6.4h1.4l.5-1.5h2.6l.6 1.5h1.4zm5.7-1.1h-3.2v-5.3h-1.3v6.4H56v-1.1zm6.3 0h-3.6v-1.8h3.2v-1.1h-3.2v-1.4h3.5v-1.1h-4.8v6.4h4.9v-1z"/></svg>
		',

		'badge-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 17.5c-9.7 0-17.5 7.8-17.5 17.5S40.3 52.5 50 52.5 67.5 44.7 67.5 35 59.7 17.5 50 17.5zm-7.4 19.9c-.2.3-.5.6-.9.7-.4.2-.8.2-1.4.2-.8 0-1.4-.2-1.9-.6-.4-.4-.7-.9-.8-1.6L39 36c.1.4.2.7.5.9.2.2.5.3.9.3s.7-.1.9-.3c.2-.2.3-.4.3-.6 0-.2 0-.3-.1-.4-.1-.1-.2-.2-.5-.3-.2-.1-.5-.1-1-.3-.7-.2-1.2-.4-1.5-.6-.4-.4-.6-.8-.6-1.3 0-.3.1-.6.3-.9.2-.3.5-.5.8-.7.3-.1.8-.2 1.3-.2.8 0 1.4.2 1.8.5.4.4.6.8.6 1.4l-1.3.1c-.1-.3-.2-.6-.4-.7-.2-.1-.5-.2-.8-.2-.4 0-.7.1-.9.2-.1.1-.2.2-.2.4s.1.3.2.4c.2.1.6.3 1.2.4s1.1.3 1.4.5c.3.2.5.4.7.7.2.3.3.6.3 1s-.1.8-.3 1.1zm6.3.8-.6-1.5h-2.6l-.5 1.5h-1.4l2.5-6.4h1.4l2.6 6.4h-1.4zm7.1 0h-4.5v-6.4h1.3v5.3H56v1.1zm6.3 0h-4.9v-6.4h4.8v1.1h-3.5v1.4h3.2v1.1h-3.2v1.8h3.6v1zM47 33.3l.9 2.4h-1.8l.9-2.4z"/></svg>
		',


		// wishlist icons
		'wishlist-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 27s-.1-.2-.4-.7c-.3-.5-.7-1-1.2-1.5-.6-.6-1.3-1.1-2.1-1.5-.9-.5-1.9-.7-3.1-.7-1.3 0-2.4.2-3.4.7s-1.8 1.1-2.5 2c-.6.7-1.1 1.7-1.5 2.7-.3 1-.5 2.1-.5 3.2 0 1.8.8 3.7 2.3 5.6 1.5 1.9 3.2 3.7 5.1 5.3 1.8 1.6 3.5 2.9 5.1 3.9s2.3 1.5 2.3 1.5.8-.5 2.3-1.5 3.2-2.3 5-3.9c1.8-1.6 3.5-3.3 5-5.2 1.5-1.9 2.3-3.8 2.3-5.6 0-1.1-.2-2.2-.5-3.2s-.9-2-1.5-2.8-1.5-1.5-2.4-2-2.1-.7-3.3-.7c-1.2 0-2.3.2-3.2.7-.9.5-1.6 1-2.1 1.5-.5.6-.9 1.1-1.2 1.5-.3.4-.5.7-.5.7z"/></svg>
		',

		'wishlist-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M56.4 22.5c-2.3 0-4.7 1.3-6.4 2.8-1.7-1.5-4.1-2.8-6.4-2.8-4.2 0-7.7 3.5-7.7 7.7 0 6.1 6.2 11 10.7 14.6.9.7 1.7 1.3 2.4 1.9l1 .8 1-.8c.7-.6 1.5-1.2 2.4-1.9 4.5-3.6 10.7-8.4 10.7-14.6 0-4.2-3.5-7.7-7.7-7.7zm-4.9 19.9L50 43.6l-1.5-1.2c-4.3-3.4-9.6-7.5-9.6-12.2 0-2.6 2.1-4.7 4.7-4.7 1.8 0 4.1 1.5 5.2 2.9l1.1 1.4 1.2-1.4c1.2-1.4 3.4-2.9 5.2-2.9 2.6 0 4.7 2.1 4.7 4.7.1 4.7-5.2 8.8-9.5 12.2z"/></svg>
		',

		'wishlist-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M58.8 26.2c-2.4-2.4-5.5-3.7-8.8-3.7s-6.5 1.3-8.8 3.7c-2.4 2.4-3.7 5.6-3.7 8.8s1.2 6.4 3.7 8.8c2.4 2.4 5.5 3.7 8.8 3.7s6.5-1.3 8.8-3.7c4.9-4.8 4.9-12.8 0-17.6zm-1.3 16.3c-2 2-4.7 3.1-7.5 3.1s-5.5-1.1-7.5-3.1c-4.1-4.1-4.1-10.9 0-15 2-2 4.7-3.1 7.5-3.1s5.5 1.1 7.5 3.1c2.1 2.1 3.1 4.8 3.1 7.5s-1 5.4-3.1 7.5zM54.6 32c1.1 1 1.1 2.7 0 3.7l-3.9 3.9c-.4.4-1 .4-1.4 0l-3.9-3.9c-1.1-1-1-2.7 0-3.7.5-.5 1.2-.8 1.9-.8s1.4.3 1.9.8l.9.9.9-.9c.9-1.1 2.6-1.1 3.6 0z"/></svg>
		',

		// trigger icons
		'trigger-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M62.5,44L62.5,44c0-0.7-0.6-1.2-1.2-1.2H38.8c-0.7,0-1.2,0.6-1.2,1.2l0,0c0,0.7,0.6,1.2,1.2,1.2h22.5C61.9,45.3,62.5,44.7,62.5,44z M62.5,26L62.5,26c0-0.7-0.6-1.3-1.2-1.3H38.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h22.5C61.9,27.2,62.5,26.7,62.5,26z"/></svg>
		',

		'trigger-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M56.3,43L56.3,43c0-0.7-0.6-1.3-1.2-1.3H38.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2H55C55.7,44.3,56.3,43.7,56.3,43z M50,27L50,27c0-0.7-0.6-1.2-1.2-1.2h-10c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h10C49.4,28.2,50,27.7,50,27z"/></svg>
		',

		'trigger-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M57.9,43L57.9,43c0-0.7-0.6-1.3-1.2-1.3H40.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h15.9C57.4,44.3,57.9,43.7,57.9,43z M60.5,27L60.5,27c0-0.7-0.6-1.2-1.2-1.2H44.9c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h14.3C59.9,28.2,60.5,27.7,60.5,27z"/></svg>
		',

		// account icons
		'account-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 20c-8.2 0-15 6.8-15 15s6.8 15 15 15 15-6.8 15-15-6.8-15-15-15zm0 3c6.6 0 12 5.4 12 12 0 2.4-.8 4.7-1.9 6.5l-1.2-.9C56.6 38.8 52.2 38 50 38s-6.6.8-8.8 2.5l-1.2 1c-1.2-1.8-2-4-2-6.5 0-6.6 5.4-12 12-12zm0 2.7c-2.7 0-4.8 2.1-4.8 4.8s2.2 5 4.8 5 4.8-2.2 4.8-5-2.1-4.8-4.8-4.8zm0 2.8c1 0 1.8.9 1.8 1.8 0 1.1-.9 1.8-1.8 1.8s-1.8-.6-1.8-1.6.8-2 1.8-2zM50 41c4.7 0 7.2 1.8 8.2 2.7-2.1 2-5 3.3-8.2 3.3s-6.2-1.3-8.2-3.3c1-.9 3.5-2.7 8.2-2.7zm-8.8 2c.1.2.3.5.6.6-.3-.2-.5-.4-.6-.6zm17.6.1c-.2.1-.3.3-.5.6.2-.3.4-.5.5-.6z"/></svg>
		',

		'account-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M47.4 20c-4.9 0-9.2 4-9.1 9.1v6.2c-.7.6-1.3 1.6-1.3 3 0 1.6.9 2.8 1.8 3.4.5.3.6.2.9.3 2 4.1 5.8 7.5 10.1 8.1h.4c4.3-.6 8.1-4 10.1-8.1.3-.1.5 0 .9-.3.9-.5 1.8-1.7 1.8-3.4 0-1.6-.9-2.8-1.8-3.4-.4-.2-.5-.2-.8-.2v-6.8c0-2.9-2.3-5.2-5.2-5.2h-1.3c0-.1-1.3-2.7-6.5-2.7zm3.2 10.4h3.3c2.1 0 3.8 1.7 3.9 3.8V37h1.5s.3 0 .6.2.5.3.5 1.1-.2.9-.5 1.1c-.3.2-.6.2-.6.2h-.8l-.3.7c-1.5 3.4-4.9 6.5-8.2 7-3.2-.5-6.7-3.5-8.2-7l-.3-.7h-.8s-.3 0-.6-.2-.5-.3-.5-1.1.2-.9.5-1.1c.3-.2.6-.2.6-.2h1.5v-4h3.9c1.9 0 3.6-1 4.5-2.6z"/></svg>
		',

		'account-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M63.5 45.6v3c0 .8-.6 1.4-1.4 1.4-.8 0-1.4-.6-1.4-1.4v-3c0-2.6-2.1-4.7-4.7-4.7H43.9c-2.6 0-4.7 2.1-4.7 4.7v3c0 .8-.6 1.4-1.4 1.4s-1.4-.6-1.4-1.4v-3c0-4.1 3.3-7.4 7.4-7.4h12.1c4.3 0 7.6 3.3 7.6 7.4zM42.6 27.4c0-4.1 3.3-7.4 7.4-7.4s7.4 3.3 7.4 7.4c0 4.1-3.3 7.4-7.4 7.4s-7.4-3.3-7.4-7.4zm2.7 0c0 2.6 2.1 4.7 4.7 4.7s4.7-2.1 4.7-4.7-2.1-4.7-4.7-4.7-4.7 2.1-4.7 4.7z"/></svg>
		',

		'account-4' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 20c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm0 4.1c2.7 0 4.9 2.2 4.9 4.9s-2.2 4.9-4.9 4.9-4.9-2.2-4.9-4.9 2.2-4.9 4.9-4.9zM50 47c-4.2 0-7.8-2.1-10-5.3 1.7-2.4 7-3.7 10-3.7s8.3 1.2 10 3.7c-2.2 3.2-5.8 5.3-10 5.3z"/></svg>
		',

		'account-5' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 20c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm0 2.3c7 0 12.7 5.7 12.7 12.7 0 3.3-1.3 6.3-3.3 8.5-.9-1.6-3.4-2.9-6.1-3.5 0 0-1.3-.4-.7-1.6.8-1 1.3-2.2 1.3-2.5 0 0 1.1-.9 1.3-2.3.1-1.3-.3-1.4-.3-1.4.5-1.5.6-7.1-3-6.5-.6-1.2-4.4-2.1-6.1 1-.8 1.5-1.2 3.7-.4 5.3 0 .1-.2-.1-.4.7 0 .8.4 2 .7 2.4.1.2.3.4.6.5 0 0 .2 1.4 1.3 2.7.2 1-.8 1.6-.8 1.6-2.8.6-5.4 1.9-6.2 3.5-2-2.2-3.2-5.2-3.2-8.4-.1-7 5.6-12.7 12.6-12.7z"/></svg>
		',

		'account-6' => '<svg width="100%" viewBox="0 0 100 70"><path d="M63.1 29.8l-12.3-9.5c-.5-.4-1.2-.4-1.7 0l-12.3 9.5c-.3.3-.5.7-.5 1.1v15c0 2.3 1.8 4.1 4.1 4.1h19.1c2.3 0 4.1-1.8 4.1-4.1v-15c0-.4-.2-.8-.5-1.1zM52.7 47.3h-5.5V36.4h5.5v10.9zm8.2-1.4c0 .8-.6 1.4-1.4 1.4h-4.1V35c0-.8-.6-1.4-1.4-1.4h-8.2c-.8 0-1.4.6-1.4 1.4v12.3h-4.1c-.8 0-1.4-.6-1.4-1.4V31.6L50 23.1l10.9 8.5v14.3z"/></svg>
		',


		'top-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50,22.5l-0.8,0.7L38.6,33.9l1.5,1.5l8.8-8.8v20.9h2.1V26.6l8.8,8.8l1.5-1.5L50.8,23.2L50,22.5z"/></svg>
		',

		'top-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M60.2,34.2C59.9,34.8,59.5,35,59,35h-4.6c0,0-0.8,10.9-1.1,11.4c-0.5,0.6-1.9,1.1-3.3,1.1c-1.2,0-2.9-0.4-3.4-1.1c-0.4-0.5-1-11.4-1-11.4H41c-0.5,0-0.9-0.2-1.2-0.8c-0.1-0.5-0.1-1,0.1-1.4c3.5-5.1,9-10,9.3-10.1c0.2-0.1,0.6-0.2,0.9-0.2s0.6,0.1,0.8,0.2c0.2,0.1,5.7,4.9,9.2,10.1C60.3,33.4,60.4,33.9,60.2,34.2z"/></svg>
		',

		'top-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50,21c0,0-6.2,4.1-6.2,13.5c0,0.2,0,0.3,0,0.5c-1.1,0.9-3.1,2.7-3.1,4.2c0,1.9,1.9,5.7,1.9,5.7l3.4-4.3l0.9,2.2h6.2l0.9-2.2l3.4,4.3c0,0,1.9-3.8,1.9-5.7c0-1.5-2.1-3.4-3.1-4.2c0-0.2,0-0.3,0-0.5C56.2,25.1,50,21,50,21zM50,28.3c1.1,0,2.1,0.9,2.1,2.1s-0.9,2.1-2.1,2.1s-2.1-0.9-2.1-2.1S48.9,28.3,50,28.3zM47.3,43.8c-0.3,0.3-0.4,0.7-0.4,1.2c0,2,3.1,4,3.1,4s3.1-2,3.1-4c0-0.4-0.2-0.8-0.4-1.2h-0.9c0,0.1,0.1,0.2,0.1,0.2c0,1.4-1.9,2.1-1.9,2.1s-1.9-0.7-1.9-2.1c0-0.1,0-0.2,0.1-0.2H47.3z"/></svg>
		',

		'top-4' => '<svg width="100%" viewBox="0 0 100 70"><path d="M43.1 39.7l6.9-6.9 6.9 6.9c.5.6 1.1.6 1.6 0s.5-1.1 0-1.7l-7.8-7.8c-.2-.2-.5-.4-.8-.4s-.6.1-.8.4L41.4 38c-.5.5-.5 1.1 0 1.7.6.6 1.1.6 1.7 0z"/></svg>
		',

		'top-5' => '<svg width="100%" viewBox="0 0 100 70"><path d="M41.9 41.7h16.2c.2 0 .3 0 .5-.1.1-.1.3-.2.3-.3.1-.2.1-.3.1-.5s-.1-.3-.2-.5l-8.1-11.7c-.2-.2-.4-.4-.7-.4s-.6.1-.7.4l-8.1 11.7c-.1.1-.2.3-.2.5s0 .3.1.5c.1.1.2.3.3.3.2.1.3.1.5.1zm8.1-11l6.4 9.2H43.6l6.4-9.2z"/></svg>
		',

		'top-6' => '<svg width="100%" viewBox="0 0 100 70"><path d="M41.9 41.7h16.2c.2 0 .3 0 .5-.1.1-.1.3-.2.3-.3.1-.2.1-.3.1-.5s-.1-.3-.2-.5l-8.1-11.7c-.2-.2-.4-.4-.7-.4s-.6.1-.7.4l-8.1 11.7c-.1.1-.2.3-.2.5s0 .3.1.5c.1.1.2.3.3.3.2.1.3.1.5.1z"/></svg>
		',

		'button-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M59.3,35c0,1.2-0.6,1.9-1.5,1.9c-0.9,0-1.5-0.7-1.5-1.9c0-1.1,0.6-1.9,1.5-1.9C58.7,33.1,59.3,33.8,59.3,35z M35.8,35.3h-1v1.6h1c0.6,0,1-0.3,1-0.8S36.4,35.3,35.8,35.3zM36.6,33.8c0-0.5-0.3-0.7-0.9-0.7h-1v1.5h0.8C36.2,34.5,36.6,34.2,36.6,33.8zM80,26.5v17c0,2.2-1.8,4-4,4H24c-2.2,0-4-1.8-4-4v-17c0-2.2,1.8-4,4-4h52C78.2,22.5,80,24.3,80,26.5z M38,36.2c0-0.7-0.6-1.3-1.3-1.4c0.6-0.1,1.1-0.6,1.1-1.2c0-0.9-0.7-1.4-1.7-1.4h-2.5v5.6h2.5C37.3,37.8,38,37.2,38,36.2z M43.8,32.2h-1.2v3.5c0,0.7-0.4,1.2-1.2,1.2c-0.8,0-1.2-0.5-1.2-1.2v-3.5H39v3.6c0,1.2,0.9,2.1,2.4,2.1c1.4,0,2.4-0.8,2.4-2.1V32.2z M49.3,32.2h-4.4v1h1.6v4.7h1.2v-4.7h1.6V32.2zM54.5,32.2h-4.4v1h1.6v4.7h1.2v-4.7h1.6V32.2z M60.5,35c0-1.8-1.1-2.9-2.7-2.9c-1.7,0-2.7,1.1-2.7,2.9s1,2.9,2.7,2.9S60.5,36.8,60.5,35z M66.4,32.2h-1.1v3.7l-2.6-3.7h-1v5.6h1.1v-3.7l2.6,3.7h1V32.2z"/></svg>
		',

		'button-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M76,24.5c1.1,0,2,0.9,2,2v17c0,1.1-0.9,2-2,2H24c-1.1,0-2-0.9-2-2v-17c0-1.1,0.9-2,2-2H76 M76,22.5H24c-2.2,0-4,1.8-4,4v17c0,2.2,1.8,4,4,4h52c2.2,0,4-1.8,4-4v-17C80,24.3,78.2,22.5,76,22.5L76,22.5zM36.7,34.8c0.6-0.1,1.1-0.6,1.1-1.3c0-0.9-0.7-1.4-1.7-1.4h-2.5v5.6h2.5c1.2,0,1.9-0.6,1.9-1.6C38,35.5,37.4,34.9,36.7,34.8z M35.7,33.1c0.6,0,0.9,0.3,0.9,0.7c0,0.5-0.4,0.8-1,0.8h-0.8v-1.5H35.7z M35.8,36.9h-1v-1.6h1c0.7,0,1.1,0.3,1.1,0.8C36.8,36.7,36.4,36.9,35.8,36.9zM42.6,32.2h1.2v3.6c0,1.2-0.9,2.1-2.4,2.1c-1.4,0-2.4-0.8-2.4-2.1v-3.6h1.2v3.5c0,0.7,0.4,1.2,1.2,1.2s1.2-0.5,1.2-1.2V32.2z M44.9,32.2h4.4v1h-1.6v4.7h-1.2v-4.7h-1.6C44.9,33.2,44.9,32.2,44.9,32.2zM50.1,32.2h4.4v1h-1.6v4.7h-1.2v-4.7h-1.6C50.1,33.2,50.1,32.2,50.1,32.2zM57.8,32.1c-1.7,0-2.7,1.1-2.7,2.9s1,2.9,2.7,2.9s2.7-1.1,2.7-2.9S59.5,32.1,57.8,32.1zM57.8,36.9c-0.9,0-1.5-0.7-1.5-1.9s0.6-1.9,1.5-1.9c0.9,0,1.5,0.8,1.5,1.9C59.3,36.2,58.7,36.9,57.8,36.9zM66.4,32.2v5.6h-1l-2.6-3.7l0,0v3.7h-1.1v-5.6h1l2.6,3.7l0,0v-3.7H66.4z"/></svg>
		',

		'norepeat' => '<svg viewBox="0 0 16 16"><rect x="6" y="6" width="4" height="4"/></svg>
		',

		'repeat' => '<svg viewBox="0 0 16 16"><path d="M0,0h4v4H0V0z M6,0h4v4H6V0z M12,0h4v4h-4V0z M0,6h4v4H0V6z M6,6h4v4H6V6z M12,6h4v4h-4V6z M0,12h4v4H0V12z M6,12h4v4H6V12zM12,12h4v4h-4V12z"/></svg>
		',

		'repeat_h' => '<svg viewBox="0 0 16 16"><rect y="6" width="4" height="4"/><rect x="6" y="6" width="4" height="4"/><rect x="12" y="6" width="4" height="4"/></svg>
		',

		'repeat_v' => '<svg viewBox="0 0 16 16"><rect x="6" width="4" height="4"/><rect x="6" y="6" width="4" height="4"/><rect x="6" y="12" width="4" height="4"/></svg>
		',

		// 2 columns layout
		'1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M24,2h2v22h-2V2z"/></svg>
		',

		'2-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M32,2h2v22h-2V2z"/></svg>
		',

		'1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M16,2h2v22h-2V2z"/></svg>
		',

		'3-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M34,2h2v22h-2V2z"/></svg>
		',

		'1-3' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M14,2h2v22h-2V2z"/></svg>
		',

		// 3 columns layout
		'1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M32,2h2v22h-2V2z M16,2h2v22h-2V2z"/></svg>
		',

		'1-2-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M11,2h2v22h-2V2z M37,2h2v22h-2V2z"/></svg>
		',

		'2-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M36,2h2v22h-2V2z M24,2h2v22h-2V2z"/></svg>
		',

		'1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M11,2h2v22h-2V2z M24,2h2v22h-2V2z"/></svg>
		',

		// 4 columns layout
		'1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M12,2h2v22h-2V2z M24,2h2v22h-2V2z M36,2h2v22h-2V2z"/></svg>
		',

		'2-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M18,2h2v22h-2V2z M28,2h2v22h-2V2z M38,2h2v22h-2V2z"/></svg>
		',

		'1-1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M1.9,26h46.2c1.1,0,1.9-0.9,1.9-2V2c0-1.1-0.9-2-1.9-2H1.9C0.9,0,0,0.9,0,2v22C0,25.1,0.9,26,1.9,26zM1.9,2h46.2v22H1.9V2zM11,24H9V2h2V24z M20,24h-2V2h2V24z M30,24h-2V2h2V24z"/></svg>
		',

		'1-2-2-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0z M48.1,24H1.9V2h46.2V24z M7.9,2h2v22h-2V2z M24,2h2v22h-2V2z M40.1,2h2v22h-2V2z"/></svg>
		',

		// 5 columns layout
		'1-1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM19.2,2h2v22h-2V2zM9.6,2h2v22h-2V2z M38.5,2h2v22h-2V2zM28.9,2h2v22h-2V2z"/></svg>
		',

		'2-1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM23.2,2h2v22h-2V2zM14.6,2h2v22h-2V2zM40.5,2h2v22h-2V2zM31.9,2h2v22h-2V2z"/></svg>
		',

		'1-1-1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M0,2l0,22c0,1.1,0.8,2,1.9,2h46.2c1,0,1.9-0.9,1.9-2V2c0-1.1-0.9-2-1.9-2L1.9,0C0.9,0,0,0.9,0,2zM1.9,2h46.2v22H1.9V2zM26.8,24h-2V2h2V24zM35.4,24h-2V2h2V24z M9.5,24h-2V2h2V24z M18.1,24h-2V2h2V24z"/></svg>
		',

		'1-1-2-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM15.1,2h2v22h-2V2zM7.5,2h2v22h-2V2z M40.5,2h2v22h-2V2z M32.9,2h2v22h-2V2z"</svg>
		',

		// 6 columns layout
		'1-1-1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM16,2h2v22h-2V2zM8,2h2v22H8V2z M24,2h2v22h-2V2z M32,2h2v22h-2V2zM40,2h2v22h-2V2z"/></svg>
		',

		'2-1-1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM20,2h2v22h-2V2zM13,2h2v22h-2V2z M27,2h2v22h-2V2z M34,2h2v22h-2V2zM41,2h2v22h-2V2z"/></svg>
		',

		'1-1-1-1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M0,2l0,22c0,1.1,0.8,2,1.9,2h46.2c1,0,1.9-0.9,1.9-2V2c0-1.1-0.9-2-1.9-2L1.9,0C0.9,0,0,0.9,0,2zM1.9,2h46.2v22H1.9V2zM30,24h-2V2h2V24zM37,24h-2V2h2V24z M23,24h-2V2h2V24z M16,24h-2V2h2V24zM9,24H7V2h2V24z"/></svg>
		',

		'1-1-2-2-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24zM13.9,2h2v22h-2V2zM6.9,2h2v22h-2V2zM24,2h2v22h-2V2zM34,2h2v22h-2V2zM41,2h2v22h-2V2z"/></svg>
		',


		'stacked' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v10v2v10c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V14v-2V2C50,0.9,49.1,0,48.1,0z M48.1,24H1.9V14h46.2V24z M1.9,12V2h46.2v10H1.9z"/></svg>
		',

		'breadcrumb-sep-1' => '<svg width="15" height="15" viewBox="0 0 20 20"><path d="M7.7,20c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1.1,0-1.5l8.1-8.1L6.7,1.8c-0.4-0.4-0.4-1.1,0-1.5
		c0.4-0.4,1.1-0.4,1.5,0l9.1,9.1c0.4,0.4,0.4,1.1,0,1.5l-8.8,8.9C8.2,19.9,7.9,20,7.7,20z"/></svg>
		',

		'breadcrumb-sep-2' => '<svg width="15" height="15" viewBox="0 0 20 20"><polygon points="7,0 18,10 7,20 "/></svg>
		',

		'breadcrumb-sep-3' => '<svg width="15" height="15" viewBox="0 0 20 20"><path d="M6.1,20c-0.2,0-0.3,0-0.5-0.1c-0.5-0.2-0.7-0.8-0.4-1.3l9.5-17.9C15,0.1,15.6,0,16.1,0.2
		c0.5,0.2,0.7,0.8,0.4,1.3L6.9,19.4C6.8,19.8,6.5,19.9,6.1,20z"/></svg>
		',

		'filter-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M35.1 25.5c0-1.1.9-2 2.1-2H63c1.1 0 2 .9 2 2.1 0 1.1-.9 2-2.1 2H37.1 37c-1-.1-1.9-1-1.9-2.1zM62.9 33H37.1c-1.1 0-2 .9-2.1 2 0 1.1.9 2 2 2.1h25.8c1.1 0 2-.9 2.1-2 0-1.2-.9-2.1-2-2.1zm0 9.4H37.1c-1.1 0-2 .9-2.1 2 0 1.1.9 2 2 2.1h25.8c1.1 0 2-.9 2.1-2 0-1.1-.9-2-2-2.1z"/></svg>
		',

		'filter-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M37.1 23.5c-1.1 0-2 .9-2.1 2 0 1.1.9 2 2 2.1h25.8c1.1 0 2-.9 2.1-2 0-1.1-.9-2-2-2.1H37.1zM39.9 33c-1.1 0-2 .9-2.1 2 0 1.1.9 2 2 2.1H60.2c1.1 0 2-.9 2.1-2 0-1.1-.9-2-2-2.1H39.9zM42.6 42.4c-1.1 0-2 .9-2.1 2 0 1.1.9 2 2 2.1h15c1.1 0 2-.9 2.1-2 0-1.1-.9-2-2-2.1h-15z"/></svg>
		',

		'filter-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M53.4,37.1c-1.6,0-2.8.9-3.2,2.3h-11.7v2.3h11.7c.5,1.4,1.8,2.3,3.2,2.3s2.8-.9,3.2-2.3h4.8v-2.3h-4.8c-.5-1.4-1.6-2.3-3.2-2.3ZM43.3,28.3h-4.8s0,2.3,0,2.3h4.8c.5,1.4,1.6,2.3,3.2,2.3s2.8-.9,3.2-2.3h11.7s0-2.3,0-2.3h-11.7c-.5-1.4-1.6-2.3-3.2-2.3s-2.8.9-3.2,2.3Z"/></svg>
		',

		'filter-4' => '<svg width="100%" viewBox="0 0 100 70"><path d="M52.3 46.5c-.2 0-.4 0-.5-.1l-4.6-2.3c-.4-.2-.6-.6-.6-1V36l-8.9-10.6c-.3-.3-.4-.8-.2-1.2.2-.4.6-.7 1-.7h23c.4 0 .9.3 1 .7.2.4.1.9-.2 1.2L53.4 36v9.4c0 .4-.2.8-.5 1-.2 0-.4.1-.6.1z"/></svg>
		',

		'mobile-toggle-type-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M41,27.8l9,9l9-9l3.5,1.8L50,42.2L37.5,29.7L41,27.8z"/></svg>
		',

		'mobile-toggle-type-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M61,33.5h-9.4V24c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5v9.4H39c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h9.4V46c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-9.4H61c0.8,0,1.5-0.7,1.5-1.5S61.8,33.5,61,33.5z"/></svg>
		',

		'mobile-toggle-type-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M37.7,29.4l0.1,0.2l10.6,12.2c0.4,0.4,0.9,0.7,1.5,0.7s1.1-0.3,1.5-0.7l10.6-12.2l0.2-0.2c0.1-0.2,0.2-0.4,0.2-0.7c0-0.7-0.6-1.2-1.3-1.2l0,0H38.8l0,0c-0.7,0-1.3,0.6-1.3,1.2C37.5,29,37.6,29.2,37.7,29.4z"/></svg>
		',

		// dark mode icons
		'color-switch-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M56.9 35c0 3.8-3.1 6.9-6.9 6.9s-6.9-3.1-6.9-6.9 3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9zm-14.6-5.8c1.1 0 1.9-.9 1.9-1.9 0-1.1-.9-1.9-1.9-1.9-1.1 0-1.9.9-1.9 1.9 0 1.1.8 1.9 1.9 1.9zm7.7-2.9c1.1 0 1.9-.9 1.9-1.9 0-1.1-.9-1.9-1.9-1.9s-1.9.9-1.9 1.9c0 1.1.8 1.9 1.9 1.9zm7.7 2.9c1.1 0 1.9-.9 1.9-1.9 0-1.1-.9-1.9-1.9-1.9-1.1 0-1.9.9-1.9 1.9 0 1.1.8 1.9 1.9 1.9zM41.3 35c0-1.1-.9-1.9-1.9-1.9-1.1 0-1.9.9-1.9 1.9s.9 1.9 1.9 1.9c1.1 0 1.9-.8 1.9-1.9zm8.7 8.7c-1.1 0-1.9.9-1.9 1.9 0 1.1.9 1.9 1.9 1.9s1.9-.9 1.9-1.9c0-1.1-.8-1.9-1.9-1.9zm10.6-10.6c-1.1 0-1.9.9-1.9 1.9s.9 1.9 1.9 1.9c1.1 0 1.9-.9 1.9-1.9s-.9-1.9-1.9-1.9zm-2.9 7.7c-1.1 0-1.9.9-1.9 1.9 0 1.1.9 1.9 1.9 1.9 1.1 0 1.9-.9 1.9-1.9 0-1.1-.8-1.9-1.9-1.9zm-15.4 0c-1.1 0-1.9.9-1.9 1.9 0 1.1.9 1.9 1.9 1.9 1.1 0 1.9-.9 1.9-1.9 0-1.1-.8-1.9-1.9-1.9z"/></svg>',

		'color-switch-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M62.4 39.5 59.3 35l3.1-4.4c.3-.4.1-1.1-.5-1.2l-5.3-1-1-5.3c-.1-.5-.7-.8-1.2-.5L50 25.7l-4.5-3.1c-.4-.3-1.1-.1-1.2.5l-.9 5.3-5.3 1c-.5.1-.8.7-.5 1.1l3.1 4.5-3.1 4.4c-.3.4-.1 1.1.5 1.2l5.3 1 1 5.3c.1.5.7.8 1.2.5l4.4-3.1 4.4 3.1c.4.3 1.1.1 1.2-.5l1-5.3 5.3-1c.5-.1.8-.7.5-1.1zM50 42.6c-4.3 0-7.7-3.5-7.7-7.7 0-4.3 3.5-7.7 7.7-7.7s7.7 3.5 7.7 7.7c0 4.3-3.4 7.7-7.7 7.7zm6.1-7.5c0 3.4-2.6 6.2-6.1 6.2s-6.1-2.9-6.1-6.3 2.7-6.2 6.1-6.2c3.4 0 6.1 2.9 6.1 6.3z"/></svg>',

		'color-switch-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 22.5c-6.9 0-12.5 5.6-12.5 12.5S43.1 47.5 50 47.5 62.5 41.9 62.5 35 56.9 22.5 50 22.5zm0 21.6v-3.4c-3.1 0-5.7-2.5-5.7-5.7s2.5-5.7 5.7-5.7v-3.4c5 0 9.1 4.1 9.1 9.1S55 44.1 50 44.1zm0-3.4V29.3c3.1 0 5.7 2.5 5.7 5.7s-2.6 5.7-5.7 5.7z"/></svg>',

		// compare icons
		'compare-1' => '<svg width="100%" viewBox="0 0 100 70"><path d="M50 32.4c-.2.8-.4 1.6-.5 2.4-.1 1.1-.2 2.3-.5 3.4-.3 1.2-.8 2.4-1.7 3.3-.9 1-2.2 1.5-3.8 1.5h-6.4v-2.4h6.4c1 0 1.6-.3 2.1-.8s.9-1.3 1.1-2.2c.2-.9.3-1.8.5-2.7 0-.2 0-.3.1-.5.1-.9.2-1.8.4-2.7.3-1.2.8-2.4 1.7-3.3.9-1 2.2-1.5 3.8-1.5h5.1l-2.8-2.8 1.7-1.7 5.7 5.7-5.7 5.7-1.7-1.7 2.8-2.8h-5.1c-1 0-1.6.3-2.1.8-.5.6-.9 1.3-1.1 2.3zm-4.4-2.2c.3-.7.6-1.5 1.1-2.2-.8-.6-1.9-1-3.2-1h-6.4v2.4h6.4c1 0 1.6.3 2.1.8zm9.9 7.7 2.8 2.8h-5.1c-1 0-1.6-.3-2.1-.8-.3.7-.6 1.5-1.1 2.2.8.6 1.9 1 3.2 1h5.1l-2.8 2.8 1.7 1.7 5.7-5.7-5.7-5.7-1.7 1.7z"/></svg>
		',

		'compare-2' => '<svg width="100%" viewBox="0 0 100 70"><path d="M48.8 22.5V31h2.4v-4.3l8.1 8.1c.2.2.2.4 0 .6L55.6 39l1.7 1.7L61 37c1.1-1.1 1.1-2.9 0-4l-8.1-8.1h4.3v-2.4h-8.4zm2.4 25V39h-2.4v4.3l-8.1-8.1c-.2-.2-.2-.4 0-.6l3.7-3.7-1.7-1.7L39 33c-1.1 1.1-1.1 2.9 0 4l8.1 8.1h-4.3v2.4h8.4z"/></svg>
		',

		'compare-3' => '<svg width="100%" viewBox="0 0 100 70"><path d="M47.7 22.5H50v25h-2.3v-2.3H42c-1.3 0-2.3-1-2.3-2.3V27c0-1.3 1-2.3 2.3-2.3h5.7v-2.2zM58 24.8h-5.7V27H58v16h-5.7v2.3H58c1.3 0 2.3-1 2.3-2.3V27c-.1-1.2-1.1-2.2-2.3-2.2z"/></svg>
		',

	];

	if (! isset($svgs[$path])) {
		return '';
	}

	return $svgs[$path];
}
}
