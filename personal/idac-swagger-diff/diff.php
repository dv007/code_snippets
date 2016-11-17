<?php
$diff = file_get_contents('diff.json');
$diff = json_decode($diff, true);
$new_endpoints = !empty($diff['new_endpoints']) ? $diff['new_endpoints'] : '';
$removed_endpoints = !empty($diff['removed_endpoints']) ? $diff['removed_endpoints'] : '';
$new_request_params = !empty($diff['new_request_params']) ? $diff['new_request_params'] : '';
$removed_request_params = !empty($diff['removed_request_params']) ? $diff['removed_request_params'] : '';
$new_response_attributes = !empty($diff['new_response_attributes']) ? $diff['new_response_attributes'] : '';
$removed_response_attributes = !empty($diff['removed_response_attributes']) ? $diff['removed_response_attributes'] : '';
function format_method($text)
{
    preg_match('#(.* \/)#', $text, $method);
    $method = !empty($method[0]) ? str_replace('/', '', $method[0]) : '';
    $text = str_replace($method, '', $text);
    return '<span class="' . $method . '">' . strtoupper($method) . '</span>&nbsp;' . $text;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Changelog</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Changelog</h1>
        </header>
        <div class="article">
            <div>
                <h2>What's New</h2>
                <hr>
				<?php if (!empty($new_endpoints)): ?>
    				<?php foreach ($new_endpoints as $endpoint): ?>
                    <ol>
                        <li><?php echo format_method($endpoint); ?></li>
                    </ol>
    				<?php endforeach; ?>
				<?php endif; ?>
            </div>
            <div>
                <h2>What's Deprecated</h2>
                <hr>
                <?php if (!empty($removed_endpoints)): ?>
                    <?php foreach ($removed_endpoints as $endpoint): ?>
                    <ol>
                        <li><?php echo format_method($endpoint); ?></li>
                    </ol>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div>
                <h2>What's Changed</h2>
                <hr>
                <?php if (!empty($new_request_params)): ?>
                    <?php foreach ($new_request_params as $k => $v): ?>
                    <ol>
                        <li>
                            <?php echo format_method($k); ?>
                            <ul class="detail">
                                <li>
                                    <h3>New request params</h3>
                                    <ul class="change param">
                                    <?php foreach ($v as $str): ?>
                                        <li><?php echo str_replace('new request param: ', '+&nbsp;', $str); ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <?php endforeach; ?>
                <?php endif; ?>

                <hr>
                <?php if (!empty($removed_request_params)): ?>
                    <?php foreach ($removed_request_params as $k => $v): ?>
                    <ol>
                        <li>
                            <?php echo format_method($k); ?>
                            <ul class="detail">
                                <li>
                                    <h3>Removed request params</h3>
                                    <ul class="change param">
                                    <?php foreach ($v as $str): ?>
                                        <li class="missing"><?php echo str_replace('missing request param: ', '-&nbsp;', $str); ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <?php endforeach; ?>
                <?php endif; ?>
                <hr>
                <?php if (!empty($new_response_attributes)): ?>
                    <?php foreach ($new_response_attributes as $k => $v): ?>
                    <ol>
                        <li>
                            <?php echo format_method($k); ?>
                            <ul class="detail">
                                <li>
                                    <h3>New response attributes</h3>
                                    <ul class="change param">
                                    <?php foreach ($v as $str): ?>
                                        <li><?php echo str_replace('new request param: ', '+&nbsp;', $str); ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <?php endforeach; ?>
                <?php endif; ?>

                <hr>
                <?php if (!empty($removed_response_attributes)): ?>
                    <?php foreach ($removed_response_attributes as $k => $v): ?>
                    <ol>
                        <li>
                            <?php echo format_method($k); ?>
                            <ul class="detail">
                                <li>
                                    <h3>Removed response attributes</h3>
                                    <ul class="change param">
                                    <?php foreach ($v as $str): ?>
                                        <li class="missing"><?php echo str_replace('missing request param: ', '-&nbsp;', $str); ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>