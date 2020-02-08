let nameList = ["松田","田中","中山","山本","本田"];
nameList.forEach(name => {
    console.log(name);
});

for(let name of nameList) {
    console.log(name);
}

for(let i = 0; i < nameList.length; i++) {
    console.log(nameList[i]);
}