let eventSource = new EventSource('script.php');

eventSource.addEventListener("message", function(event) {
    let data = JSON.parse(event.data);
    let listElements = document.getElementByTagName("li");
    
    for (let i = 0; i <listElements.length; i++) {
        let animal = listElements[i].textContent;
        if (!data.includes(animal)) {
            listElements[i].style.color = "red";
        }
    }
});