<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fetch login</title>
</head>
<body>
	<script type="text/javascript" src="">
		const headers = new Headers();
		headers.append('Accept', 'application/json');
		headers.append('authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWM4MDRmMDkzZWIzMTFiNjI2MmUyYWU3NGJiODJiOTMxY2Q4NGUwN2VmYzMwMzYxYWJjMDFhOTI4MDgyNjM3YTZlMzBjYTcyMTY4YTI0MzIiLCJpYXQiOjE3MDc4MzEwNzIuMTQ3MDAzLCJuYmYiOjE3MDc4MzEwNzIuMTQ3MDA1LCJleHAiOjE3Mzk0NTM0NzIuMTQ1NzYyLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Sm1kwG9LoqXtrQtSzSH38bPF90Fdm0D3-r573rqcswpa9TiZGz6K2k-aK540xocZG9lqeurQfGIRnv3bwkwI4azEje-lKd38fswNCoJvSJH-gWwtuWSNRR4fPHYHDzuCBGH9M8E7HxRUJD0px6kq2vNkp_FRVN-PF5ZILAAPNSLpcsG2MaWFvrdTnloa38nXDjbgMcBYuU_Tue-yKysJIk2rdgDAAEd5l1yTJQT69sh9HSrj6p-Nlo4IkXLF_28i1vm_6a-8asfdimKkd7VdKy8gzPEHWUWlhW4j1vqpPEFV2YpIuviLQCmPOFDYoZikFKCYwI0aed2Bkk0pRdbUQpaqi4GsdMowmJVnaEQVydP3mtDJGk7Hq3kFyfNt8fgmc9qBqm6YfxRGr6n0WFV_sm0Xye_fPapXnnN_HzN-qCCGolVMxSoukWnsSJxIjUHsYMZ7cWGp7NGggKzkftjHBmZ0w44k-1BAk3b2M3YHjiADBpr_e0p1GZUBrt5EF8bmP4cMAR6gs7pitFzzzSglotzOJhw43gCKhBAffxDE0AWyfITuM5xtn5Iy3xBHgjRh06w0wb9gdIwVw9oSZc5kpnzu967ObwSRhFHR5osLFk4EEd9AbjEO78pP4xRX5awSL0bgx9mtylxzssprgvU7aCWpRTaejghdeSHIfdSnDjQ');
		
		const init = {
		  method: 'GET',
		  headers
		};
		
		fetch('https://agueriv3110.ieszaidinvergeles.es/laraveles/apiUserApp/public/api/user', init)
		.then((response) => {
		  return response.json(); // or .text() or .blob() ...
		})
		.then((text) => {
		  // text is the response body
		  consle.log(text);
		})
		.catch((e) => {
		  // error in e.message
		});
	</script>
</body>
</html>