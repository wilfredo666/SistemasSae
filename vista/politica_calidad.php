<div class="modal-header">
</div>
<div class="modal-body" id="formulario">
 <h3 class="text-center"><b>Politica de seguridad y calidad</b></h3>
  <p>
    Servicios Aeronáuticos Especializados opera en el rubro de servicios de mantenimiento de
    aeronaves a nivel nacional e internacional, entre ellos: mantenimiento mayor, mantenimiento de
    línea, servicios especializados en aeronaves y componentes, y consultoría técnica.
  </p>
  <p>
    Trabaja para brindar un servicio de completa satisfacción de sus clientes, contando con procesos
    eficientes, personal competente y tecnología adecuada. Cumpliendo con los reglamentos
    aplicables, protegiendo el medio ambiente; y buscando los más altos estándares de calidad y
    seguridad en sus operaciones a través de la mejora continua.
  </p>
  <p>
    Se compromete activa y visiblemente con la identificación de los peligros y la mitigación del riesgo
    de incidentes o accidentes en las actividades de mantenimiento, inculcando una cultura de
    seguridad operacional que promueva la participación y aporte de todos los trabajadores de la
    empresa mediante los reportes voluntarios, garantizando que no se tomen represalias por
    notificación a menos que sea negligencia o despreocupación deliberada o consciente de los
    reglamentos aplicables y procedimientos de la organización, aplicando los principios de cultura
    justa a cualquier evento informado oportunamente.
  </p>

  <h5><b>COMPROMISO CORPORATIVO</b></h5>
  <p>
    Desde la dirección, respaldando nuestra Política de Calidad y Seguridad Operacional, nos
    comprometemos a:
  </p>

  <blockquote style="border-left: white;">
    <ul>
      <li>
        Asignar recursos materiales, humanos y financieros suficientes para cumplir con la política
        y los objetivos de seguridad operacional, acordes con la naturaleza de las operaciones y
        conforme a las habllitaciones y limitaciones de operación aprobadas a la empresa.
      </li>
      <li>
        Alcanzar y mantener altos niveles de satisfacción en nuestros clientes.
      </li>
      <li>Implementar, mantener y mejorar continuamente los procesos y procedimientos, tomando
        en cuenta la integración adecuada y efectiva con otros sistemas, y asegurando la
        responsabilidad general de la gestión del mantenimiento.</li>
      <li>
        Cumplir estricta y fielmente con los requisitos legales contenidos en Reglamentación
        Aeronáutica Boliviana y otros aplicables, a través de los procedimientos descritos en todos
        los manuales de la organización.
      </li>
      <li>
        Revisar periódicamente la política de Calidad y Seguridad Operacional para garantizar que
        sigue siendo pertinente y adecuada para la OMA.
      </li>
      <li>
        Promover la difusión y comprensión de nuestra política de calidad y seguridad operacional,
        en toda la organización, mediante capacitación y acceso a información.
      </li>
      <li>
        Alcanzar un nivel eficaz en el SMS, comprometido con la mejora continua de su rendimiento.
        incentivando y responsabilizando a todos los niveles de la organización, estableciendo y
        operando procesos de identificación de peligros y gestión de riesgos, incluida la recopilación
        continua de datos de aeronavegabilidad e informes de sucesos que se hayan producido en
        aeronaves a las cuales se brinda servicio de mantenimiento, así como los informes internos
        de la organización sobre problemas y riesgos de seguridad operacional y las notificaciones
        voluntarias de empleados.
      </li>
      <li>
        Implementar, mantener y mejorar continuamente los procesos y procedimientos del
        programa de prevención de uso indebido de sustancias psicoactivas.
      </li>
      <li>
        Entender que las personas están integradas al medio ambiente y que el cuidado de ambas
        es precepto fundamental.
      </li>
      <li>
        Asegurar que la “Cultura Justa” considere una evaluación de los comportamientos caso por
        caso.
      </li>
      <li>
        Brindar a la AAC total acceso a la OMA LAR-RAB y colaborar a fin de que pueda efectuar
        inspecciones en todo momento.
      </li>
    </ul>
  </blockquote>

<div class="row">
   <div class="col-sm-4"></div>
  <div class="col-sm-8">
    <img src="../assest/img/logo.png" alt="" width="250">
  </div>
</div>
  <div class="row">
    <div class="col-sm-12">
      <p class="float-right">
        Revisión 20, fecha 31/Enero/2023
        <br>
        JSO No. QMS/SMS 02-23
      </p>
    </div>
  </div>


  <p class="text-primary">
    El contenido de este manual es de propledad de Servicios Aeronáuticos Especializados, la copia total o parcial de este, está penado por ley.
  </p>


  <div class="form-group mb-0">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="politicaCheckbox" onclick="continuarPolitica()">
      <label for="politicaCheckbox" class="custom-control-label">
        Acepto los terminos y condiciones
      </label>
    </div>
  </div>
</div>
<div class="modal-footer justify-content-between">
  <button id="continuarBtn" type="button" class="btn btn-primary" data-dismiss="modal" disabled>Continuar</button>
</div>
<script>
  function continuarPolitica() {
    var checkbox = document.getElementById("politicaCheckbox");
    var continuarBtn = document.getElementById("continuarBtn");
    
    if (checkbox.checked) {
      continuarBtn.disabled = false; // Habilitar el botón
    } else {
      continuarBtn.disabled = true; // Deshabilitar el botón
    }
  }

</script>
