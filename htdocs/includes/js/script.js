
//document.addEventListener("DOMContentLoaded", function() {
window.onload = () => {
	// sets active class on active navigation link
	// runs on every page load 
	let links = document.querySelectorAll('.nav-link');
	let active_link = document.querySelector('.active');
	if (active_link) {
		active_link.classList.remove('active');
	}
	document.querySelectorAll('.nav-link').forEach((link) => {
		if (link.href === window.location.href) {
			link.classList.add('active');
		}
	})

	// appends fragment identifier on page load if it
	// is appropriate to do so 
	if (location.hash) {
		const breadcrumbs = document.querySelector(".breadcrumb");
		const fragment = document.querySelector(".fragment");
		if(!fragment) {
			const list_element = document.createElement("li");
			list_element.classList.add("breadcrumb-item", "fragment");
			list_element.appendChild(document.createTextNode(location.hash.replace("#", "")));
			breadcrumbs.appendChild(list_element);
		} else {
			breadcrumbs.lastChild.innerHTML = location.hash.replace("#", "");
		}
	}

	console.log("yo mamma");
}  //);

//appends the fragment identifier to the breadcrumb list
function append_fragment(anchor_element) {

	const breadcrumbs = document.querySelector(".breadcrumb");
	const fragment = document.querySelector(".fragment");

	if (!fragment) {
		const list_element = document.createElement("li");
		list_element.classList.add("breadcrumb-item", "fragment");
		list_element.appendChild(document.createTextNode(anchor_element.hash.replace("#", "")));
		breadcrumbs.appendChild(list_element);
	} else {
		breadcrumbs.lastChild.innerHTML = anchor_element.hash.replace("#", "");
	}

}








