function onTagButtonClick() {
    let buttonTags = document.getElementsByTagName("button");
    let result = "";
    for (let buttonTag of buttonTags) {
        result += buttonTag.textContent + ":";

    }
    let resultP = document.getElementById("result");
    resultP.textContent = result;
}
