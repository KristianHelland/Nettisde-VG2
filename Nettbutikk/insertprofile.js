function createElement(data) {

    const newDiv = document.createElement("div")

    let newContent = document.createTextNode(data);

    newDiv.appendChild(newContent);

    newDiv.classList.add("color")

    const section = document.getElementById("profile");
    section.appendChild(newDiv)
}

for (let i in data2) {
    createElement(data2[i]);
}