{
    let d_nav = document.querySelector("#nav-list");
    let d_headings = document.querySelectorAll("h2");

    if(d_headings.length) {
        for(let i = 0; i < d_headings.length; i++) {
            d_headings[i].setAttribute("id", "line-" + i);

            let navItem = document.createElement("li");
            let navItemLink = document.createElement("a");
            navItemLink.setAttribute("href", "#line-" + i);
            navItemLink.innerHTML = d_headings[i].innerHTML;

            navItem.appendChild(navItemLink);
            d_nav.appendChild(navItem);
        }
    }
}