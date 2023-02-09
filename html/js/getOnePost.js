const currentUrl = new URL(window.location.href);
const id = new URLSearchParams(currentUrl.search).get('id');


function convertDate($date){
    const databank = new Date($date);
    const day = databank.getDate().toString().padStart(2, '0');
    const month = (databank.getMonth() + 1).toString().padStart(2, '0');
    const year = databank.getFullYear();
    return `${day}/${month}/${year}`;

}

function renderElements(data){
    let dateBrasilOnePost = convertDate(data.datas)
    
    let title = document.querySelector('#title')
    let description = document.querySelector('#description')
    let text = document.querySelector('#text')
    let date = document.querySelector('#date')
    let image = document.querySelector('#image')

    if(image) {
        image.setAttribute("src", data.img);
    }
    if(title) {
        title.append(data.title);
    }
    if(description) {
        description.append(data.descricao);
    }
    if(text) {
        text.append(data.texto);
    }
    if(date) {
        date.append(dateBrasilOnePost);
    }
    
}

function getOnePost(){
    axios.get(`http://localhost:8000/api/get.php?id=${id}`)
    .then(response =>{
    
        const data = response.data.result
        renderElements(data)
    })
    .catch(error => console.log(error))
}
getOnePost();
