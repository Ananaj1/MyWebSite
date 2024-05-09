const api = {
  // тут замените на адрес ресурса на вашем сервере, который будет отдавать факты
  fact: "beckend.php"
};


document.querySelector('.btBox').addEventListener('click', function(){
  fetch(api.fact).then(
    (r) => {
      if (!r.ok) {
        throw new Error('SOMETHING_WRONG');
      }
      return r.json();
    }
  ).then(({ fact }) => {
    document.querySelector('.fact').textContent = fact;
  }).catch(console.error);
 
 
});