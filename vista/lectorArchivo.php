<?php

global $archivo;
global $numOrden;
$archivo = $_GET['archivo'];

if(isset($_GET['numOrden'])){
  $numOrden = $_GET['numOrden'];
  $ruta= "../assest/files/archivos/ordenTrabajo/". $numOrden."/".$archivo;
}else if(isset($_GET['email'])){
  $email = $_GET['email'];
  $ruta= "../assest/dist/files/archivos/". $email."/".$archivo;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $archivo;?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  div{
    text-align: center;
    background-color: #4f4f52;
  }
</style>
<body>
  <div>
    <header>
      <ul class="navigation">
        <li class="navigation__item">
          <!-- Navigate to the Previous and Next pages -->
          <a href="#" class="previous round" id="prev_page">
            <i class="fas fa-arrow-left"></i>
          </a>
          <!-- Navigate to a specific page -->
          <input type="number" value="1" id="current_page" />
          <a href="#" class="next round" id="next_page">
            <i class="fas fa-arrow-right"></i>
          </a>
          <!-- Page Info -->
          Page
          <span id="page_num"></span>
          of
          <span id="page_count"></span>
        </li>
        <!-- Zoom In and Out -->
        <li class="navigation__item">
          <button class="zoom" id="zoom_in">
            <i class="fas fa-search-plus"></i>
          </button>
          <button class="zoom" id="zoom_out">
            <i class="fas fa-search-minus"></i>
          </button>
        </li>
      </ul>
    </header>
    <!-- Canvas to place the PDF -->
    <canvas id="canvas" class="canvas__container"></canvas>
  </div>
  <!-- Load PDF.js -->

  <script src="../assest/pdfjs-3.11.174-legacy-dist/build/pdf.js"></script>
  
  <script>
    <?php $archivos = $ruta; ?>
    
    console.log('Ruta del archivo PDF:', '<?= $archivos; ?>');
    const pdf = '<?= $archivos; ?>';
    const pageNum = document.querySelector('#page_num');
    const pageCount = document.querySelector('#page_count');
    const currentPage = document.querySelector('#current_page');
    const previousPage = document.querySelector('#prev_page');
    const nextPage = document.querySelector('#next_page');
    const zoomIn = document.querySelector('#zoom_in');
    const zoomOut = document.querySelector('#zoom_out');

    const initialState = {
      pdfDoc: null,
      currentPage: 1,
      pageCount: 0,
      zoom: 1,
    };

    // Load the document.
    pdfjsLib
      .getDocument(pdf)
      .promise.then((data) => {
        initialState.pdfDoc = data;
        console.log('pdfDocument', initialState.pdfDoc);
        pageCount.textContent = initialState.pdfDoc.numPages;
        renderPage();
      })
      .catch((err) => {
        alert(err.message);
      });

    // Render the page.
    const renderPage = () => {
      // Load the first page.
      console.log(initialState.pdfDoc, 'pdfDoc');
      initialState.pdfDoc
        .getPage(initialState.currentPage)
        .then((page) => {
          console.log('page', page);
          const canvas = document.querySelector('#canvas');
          const ctx = canvas.getContext('2d');
          const viewport = page.getViewport({
            scale: initialState.zoom,
          });
          canvas.height = viewport.height;
          canvas.width = viewport.width;
          // Render the PDF page into the canvas context.
          const renderCtx = {
            canvasContext: ctx,
            viewport: viewport,
          };
          page.render(renderCtx);
          pageNum.textContent = initialState.currentPage;
        });
    };

    const showPrevPage = () => {
      if (initialState.pdfDoc === null || initialState.currentPage <= 1)
        return;
      initialState.currentPage--;
      // Render the current page.
      currentPage.value = initialState.currentPage;
      renderPage();
    };

    const showNextPage = () => {
      if (
        initialState.pdfDoc === null ||
        initialState.currentPage >= initialState.pdfDoc._pdfInfo.numPages
      )
        return;
      initialState.currentPage++;
      currentPage.value = initialState.currentPage;
      renderPage();
    };

    // Button events.
    previousPage.addEventListener('click', showPrevPage);
    nextPage.addEventListener('click', showNextPage);

    // Keypress event.
    currentPage.addEventListener('keypress', (event) => {
      if (initialState.pdfDoc === null) return;
      // Get the key code.
      const keycode = event.keyCode ? event.keyCode : event.which;
      if (keycode === 13) {
        // Get the new page number and render it.
        let desiredPage = currentPage.valueAsNumber;
        initialState.currentPage = Math.min(
          Math.max(desiredPage, 1),
          initialState.pdfDoc._pdfInfo.numPages,
        );
        currentPage.value = initialState.currentPage;
        renderPage();
      }
    });

    // Zoom events.
    zoomIn.addEventListener('click', () => {
      if (initialState.pdfDoc === null) return;
      initialState.zoom *= 4 / 3;
      renderPage();
    });

    zoomOut.addEventListener('click', () => {
      if (initialState.pdfDoc === null) return;
      initialState.zoom *= 2 / 3;
      renderPage();
    });
  </script>

 <script type="text/javascript">
    // Click derecho
    document.onmousedown = disableRightclick;
    var message = "No permitido!!";

    function disableRightclick(evt) {
      if (evt.button == 2) {
        alert(message);
        return false;
      }
    }
    window.addEventListener('keydown', function(event) {
      // Control P o imprimir
      if (event.keyCode === 80 && (event.ctrlKey || event.metaKey) && !event.altKey && (!event.shiftKey || window.chrome || window.opera)) {
        event.preventDefault();
        if (event.stopImmediatePropagation) {
          event.stopImmediatePropagation();
        } else {
          event.stopPropagation();
        }
        return;
      }
    }, true);
  </script>
</body>
</html>
