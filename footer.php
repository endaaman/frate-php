<?php
// deny direct access
if(count(get_included_files()) == 1) {
	http_response_code(400);
  exit();
}
?>
</body>
</html>
