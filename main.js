const input = document.querySelector(".search-box");
const searchForm = document.querySelector("#search-form");

input.addEventListener("input", (e) => search(e.target.value));

// Prevent submission of the form
searchForm.addEventListener("submit", (e) => {
	e.preventDefault();
});

function search(name) {
	// Send a POST request using the Fetch API where
	// we set the name variable equal to the value of the input box (name),
	fetch("search.php", {
		method: "POST",
		body: new URLSearchParams(`name=${name}`),
	})
		.then((result) => result.json()) // Set data type to JSON
		.then((result) => viewSearchResult(result)) // Display search results
		.catch((e) => console.error(`Error: ${e}`));
}

// ---------------------
// Display search result

// Table header
const table = document.querySelector("#result");
setHeader();

function viewSearchResult(result) {
	setHeader();

	if (result.length == 0) {
		table.innerHTML = "";
		table.innerHTML += "<p style='text-align: center;width: 100%;padding: 1em;'>no result</p>";
	}

	// Iterate through the objects and append them to the table.
	showResult(result);
}

function setHeader() {
	table.innerHTML = `
		<tr>
			<th>user_id</th>
			<th>username</th>
			<th>password</th>
		</tr>`;
}

function showResult(result) {
	result.forEach((item) => {
		let data = `<tr>
			<td>${item.user_id}</td>
			<td>${item.username}</td>
			<td>${item.password}</td>
        </tr>`;

		table.innerHTML += data;
	});
}
