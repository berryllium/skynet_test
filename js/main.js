let content = document.querySelector('main')
getPage('main.php')
function getPage(page) {
  url = `controllers/${page}`
fetch(url)
  .then(response => response.text())
  .then(result => content.innerHTML=result)
}
