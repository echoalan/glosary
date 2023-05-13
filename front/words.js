const root = document.getElementById('root');

async function getWord() {
    const response = await fetch('http://localhost/glosary/back/controller/wordController.php');
    const data = await response.json();
    return data;
  }
  
const showData = (data) =>{
    let html = '';
    data.forEach(element => {
        html += `
            <div class='contentWords'>
                <h3>${element.WORD}</h3>
            </div>
        `
        root.innerHTML = html;
    });
  }

async function fetchWord() {
    try {
      const data = await getWord();
      showData(data); 
    } catch (error) {
      console.error(error); 
    }
  }

fetchWord();

