
const url = 'http://localhost:8000/api/getall.php';
function getAllPost(){
    
    axios.get(url)
    .then(response =>{
        let data = response.data.result
        let container = document.querySelector('.list')
        
        let content = ``
        data.forEach(element => {
            let dateBrasilAllPost = convertDate(element.datas)

            content +=  `
            <div class=" col-lg-6">
            <div class=" item card">
                <div class=" row g-0">
                    <div class="pai col-6 col-md5">
                        <img src="${element.img}" class="card-img img-fluid rounded-start h-100" alt="">
                    </div>
                    <div class="col-6 col-md7">
                        <div class="card-body d-flex flex-colum">
                            <div class="h-100">
                                <h1 class='card-title'>${element.title}</h1>
                                <p class="descricao card-text">${element.descricao}</p>
                                <p class="descricao card-text">Data da publicação: ${dateBrasilAllPost}</p>
                            
                                
                                <a href="http://localhost:8000/template/info.php?id=${element.id}" class="btn btn-primary ">ler mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
        });
        container.innerHTML = content

    })
    .catch(error => console.log(error))
}
getAllPost();

