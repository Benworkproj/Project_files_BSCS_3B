<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';

require_once '../../../app/core/Redirect.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_not_admin();
