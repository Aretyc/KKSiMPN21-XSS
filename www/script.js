window.addEventListener('DOMContentLoaded', (event) => {
    fetch('./getJson.php')
        .then(response => response.json())
        .then(data => {
            let ul = document.querySelector("#user-list");
            data.forEach(element => {
                let li = document.createElement("li");
                li.innerText = element;
                ul.appendChild(li);
            });
        })

});