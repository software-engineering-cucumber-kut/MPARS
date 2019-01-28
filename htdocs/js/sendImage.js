const sendImage = (form) => {
    //console.log(form.get(0));
    let formData = new FormData(form.get(0));
    //console.log(formData);
    let photoName = "";
    $.ajax({
        url: 'data/putImage.php',
        type: 'POST',
        data: formData,
        cache : false,
        contentType : false,
        processData : false,
        dataType : "html",
        async: false
    }).done((res) => {
        //console.log("sendImage:" + res);
        photoName = JSON.parse(res).name;
    });
    return photoName;
};
