document.getElementById('fileInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(event) {
        const codeReader = new ZXing.BrowserMultiFormatReader();
        const imgElement = document.getElementById('barcodeImage');
        imgElement.src = event.target.result;
  
        codeReader.decodeFromImageElement(imgElement)
          .then(result => {
            console.log('Decoded:', result.text);
            alert('Decoded result: ' + result.text);
          })
          .catch(err => {
            console.error('Error:', err);
            alert('Error decoding the barcode. Please try another image.');
          });
      };
      reader.readAsDataURL(file);
    }
  });
  