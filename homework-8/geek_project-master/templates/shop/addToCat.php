
<h1>Добавить товар:</h1>

	<div class="form-group">
		<label for="inputName">Name:</label>
		<input type="text" class="form-control" id="inputName" placeholder="Name">
	</div>
	<div class="form-group">
		<label for="inputDescr">Description</label>
		<input type="text" class="form-control" id="inputDescr" placeholder="Description">
	</div>
	<div class="form-group">
		<label for="inputPrice">Price</label>
		<input type="number" class="form-control" id="inputPrice" min="1" placeholder="Price">
	</div>
	<div class="form-group">
		<label for="inputQuant">Quantity</label>
		<input type="number" class="form-control" id="inputQuant" min="1" placeholder="Quantity" value="1">
	</div>
	<div>
		<label for="selectCat">Выберите категорию товара</label>
		<select id="selectCat" class="custom-select">
			<option selected value="5">first</option>
			<option value="6">second</option>
			<option value="7">third</option>
		</select>
	</div>
	<br>
	<button id="submitForm" class="btn btn-primary">SEND</button>



<script src="/js/request.js" defer></script>