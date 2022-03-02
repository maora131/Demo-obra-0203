const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <footer class="py-3 mt-5">

      <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

          <a href="/" class="d-flex mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            <span class="text-muted">&copy; 2022 Servizo de Orientación Laboral</span>
          </a>

          <ul class="nav col-md-4 d-flex justify-content-end list-unstyled">
            <li class="ms-3">
              <a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img class="bi" height="32"  src="../../img/portal.png"></a>
            </li>
            <li class="ms-3">
              <a class="text-muted" href="https://correo.vigo.org/zimbra/"><img class="bi" height="32"  src="../../img/peque-zimbra.png"></a>
            </li>
            <li class="ms-3">
              <a class="text-muted" href="https://hoxe.vigo.org/"><img class="bi" height="32"  src="../../img/escudo.png"></a>
            </li>
          </ul>

      </div>
    </footer>
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

{/* <style>
  footer {
    width: 100vw;
    position: absolute;
    bottom: 0;
  }
</style> */}
