const enviarData = document.getElementById('enviarData');
const word = document.getElementById('word');
const category = document.getElementById('category');


async function sendata(word, category){
    const formData = new FormData();
    formData.append('word', word);
    formData.append('category', category);

    try {
        const response = await fetch('http://localhost/glosary/back/controller/insertController.php', {
            method: 'POST',
            body: formData,
            mode: 'cors'
        });
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error(error);
    }
}

enviarData.addEventListener('click', ()=>{
    sendata(word.value, category.value);
});
