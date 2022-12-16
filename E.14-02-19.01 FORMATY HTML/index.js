red = () => {
    var size = document.getElementById('value').value;
    var style = document.getElementById('select').value;

    if (style === "kursywa") {
        document.getElementById('result').style = "color:red; font-size:" + size + "%; font-style: italic;";
    } else {
        document.getElementById('result').style = "color:red; font-size:" + size + "%";
    }

}

green = () => {
    var size = document.getElementById('value').value;
    var style = document.getElementById('select').value;


    if (style === "kursywa") {
        document.getElementById('result').style = "color:green; font-size:" + size + "%; font-style: italic;";
    } else {
        document.getElementById('result').style = "color:green; font-size:" + size + "%";
    }
}

blue = () => {
    var size = document.getElementById('value').value;
    var style = document.getElementById('select').value;


    if (style === "kursywa") {
        document.getElementById('result').style = "color:blue; font-size:" + size + "%; font-style: italic;";
    } else {
        document.getElementById('result').style = "color:blue; font-size:" + size + "%";
    }
}

// Jan Kupczyk