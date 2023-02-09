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
    let title = document.querySelector('#title')
    let description = document.querySelector('#description')
    let text = document.querySelector('#text')
    let date = document.querySelector('#date')
    let image = document.querySelector('#image')

    let dateBrasilOnePost = convertDate(data.datas)

    renderImageOnePost = image.setAttribute("src", data.img)
    title.append(data.title)
    description.append(data.descricao)
    text.append(data.texto)
    date.append(dateBrasilOnePost)
    image.append(renderOnePost)
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
