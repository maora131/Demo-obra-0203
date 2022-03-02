


const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>

  </style>


<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2022 Servizo de Orientación Laboral</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img class="bi" height="32"  src="../img/portal.png"></a>
      </li>
      <li class="ms-3"><a class="text-muted" href="https://correo.vigo.org/zimbra/"><img class="bi" height="32"  src="../img/peque-zimbra.png"></a></li>
      <li class="ms-3"><a class="text-muted" href="https://hoxe.vigo.org/"><img class="bi" height="32"  src="../img/escudo.png"></a></li>
      </ul>
  </footer>
</div>

`;

class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const fontAwesome = document.querySelector('link[href*="font-awesome"]');
    const shadowRoot = this.attachShadow({ mode: 'closed' });

    if (fontAwesome) {
      shadowRoot.appendChild(fontAwesome.cloneNode());
    }

    shadowRoot.appendChild(footerTemplate.content);
  }
}

customElements.define('footer-component', Footer);
