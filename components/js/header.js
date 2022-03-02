const headerTemplate = document.createElement("template");

headerTemplate.innerHTML = `

<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap');
header{
  background: rgb(217,64,54);
  background: linear-gradient(180deg, rgba(217,64,54,1) 0%, rgba(184,18,7,1) 55%, rgba(158,18,9,1) 100%);
}

.link-2{
  font-family: 'Nunito', sans-serif;
  color:#ffffff;
  font-size:16px;
  margin-right:4rem;

}

.link-2:hover {
  transform: scale(1.1);
  color:#ffffff;
  text-decoration: underline;
}

@keyframes link-2 {
  0% { box-shadow: 0 0 0 0 var(--hover); }
}

.form-control{
  height:1.7em;
}


</style>
      <header class="p-1 mb-3 border-bottom bloque" >

      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-2">INICIO</a></li>
            <li><a href="#" class="nav-link px-2 link-2">CITAS</a></li>
            <li><a href="#" class="nav-link px-2 link-2">PERSOAS</a></li>
            <li><a href="#" class="nav-link px-2 link-2">EMPRESAS</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFgRczxLlaU1A/profile-displayphoto-shrink_200_200/0/1517346451533?e=1649894400&v=beta&t=-OI1lH6bVgom993wUDkODtrl6qUV19jx-RfVhP2WsA0" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Novo usuario...</a></li>
              <li><a class="dropdown-item" href="#">Axustes</a></li>
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Saírt</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
      `;
class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: "closed" });

    shadowRoot.appendChild(headerTemplate.content);
  }
}
customElements.define("header-component", Header);
