const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const districtInput = document.getElementById('district')
const dateInput = document.getElementById('dateadded')
const downloadBtn = document.getElementById('download-btn')


const image = new Image()
image.src = 'assets/images/certificate.png'
image.onload = function () {
	// ctx.imageSmoothingEnabled = false;
	

	// context.imageSmoothingEnabled = false;
	// drawImage2()
	drawImage()
	drawText(nameInput.value.toUpperCase(), 250, 173, 16,'monotype arial');
drawText(districtInput.value.toUpperCase(), 250, 244, 10,'monotype arial');
drawText(dateInput.value.toUpperCase(), 250, 260, 10,'monotype arial');


}
// drawText('This is the top',canvas.width/2,20,24,'verdana');
// drawText('This is the bottom',canvas.width/2,canvas.height-20,16,'Courier');

function drawText(text,centerX,centerY,fontsize,fontface){

  ctx.save();
  ctx.font=fontsize+'px '+fontface;
  ctx.textAlign='center';
  ctx.textBaseline='middle';
  ctx.fillText(text,centerX,centerY);
  ctx.restore();
}

function drawImage() {
	// ctx.clearRect(0, 0, canvas.width, canvas.height)
	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.font = '16px monotype arial'
	ctx.fillStyle = '#00000'
	ctx.textAlign = "center"

	// ctx.imageSmoothingEnabled = false;
	// ctx.fillText(nameInput.value.toUpperCase(), 250, 178)
	// ctx.restore();
	// ctx.fillText(districtInput.value.toUpperCase(), 250, 248)
}
function drawImage2() {
	// ctx.clearRect(0, 0, canvas.width, canvas.height)
	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.font = '10px monotype arial'
	ctx.fillStyle = '#00000'
	ctx.textAlign = "center"

	// ctx.imageSmoothingEnabled = false;
	// ctx.fillText(districtInput.value.toUpperCase(), 250, 248)
	ctx.restore();
}

nameInput.addEventListener('input', function () {
	drawImage()
	// drawImage2()
})

districtInput.addEventListener('input', function () {
	drawImage2()
	// drawImage2()
})

downloadBtn.addEventListener('click', function () {
	downloadBtn.href = canvas.toDataURL('image/png')
	downloadBtn.download = 'Certificate' 
})