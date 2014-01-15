<!doctype html>
<html>
	<head>
		<title>PHP Syntax-Highlighting Examples : Perishable Press</title>
		<style type="text/css">
			body { line-height: 1.5; }
			.wrap { width: 740px; margin: 0 auto; }
			dt { font-weight: bold; }
			dd { margin: 10px 0 20px 40px; }
			a:link, a:visited { color: #990000; text-decoration: none; }
			a:hover, a:active { color: #777; }
			abbr { cursor: help; border-bottom: 1px dotted #990000; }
			code, .pre { font: normal 12px/18px Monaco, monospace; }
			.pre { width: 600px; margin: 20px auto; padding: 20px; color: #333; background-color: #efefef; border: 1px solid #ccc; text-shadow: 1px 1px 1px #fff; }
		</style>
	</head>
	<body>
		<div class="wrap">
			<h1><a href="http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/">PHP Syntax-Highlighting Examples</a></h1>
			<p>
				This page links to several examples of <abbr title="Recursive Acronym - PHP: Hypertext Preprocessor">PHP</abbr> syntax-highlighting referred to in the article, 
				<a href="http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/">5&nbsp;Easy Ways to Display Syntax Highlighted PHP Code</a>. 
				View the PHP source code to see how these examples work. <strong>Note</strong> that the files and examples included in this demo pack require 
				PHP in order to work properly<code>&lt;/note&gt;</code>. 
			</p>

			<h2>Highlight an entire file</h2>
			<p>
				Using the PHP function <code>highlight_file()</code>, we can generate &ldquo;<cite title="http://us.php.net/highlight-string">a syntax-highlighted 
				version of the given PHP code using the colors defined in the built-in syntax highlighter for PHP.</cite>&rdquo;
			</p>
			<dl>
				<dt><a href="file_example.phps">Syntax-highlighting via <code>.phps</code> extension</a></dt>
				<dd>
					This method is dead-easy if enabled on your server. Simply change the file extension from <code>.php</code> to <code>.phps</code>. 
					Be careful not to reveal the source of any secure data, such as passwords, etc.
				</dd>
				<dt><a href="file_example-01.php">PHP syntax-highlighting via <code>FILE</code> constant</a></dt>
				<dd>
					Another easy method for highlighting the syntax of a PHP file is to call the <code>highlight_file()</code> function at the 
					beginning of the file. The first line in this example is the only code needed to highlight any PHP document.
				</dd>
				<dt><a href="file_example-02.php">Unobtrusive syntax-highlighting for PHP files and strings</a></dt>
				<dd>
					This method requires no tampering with the target file. Simply employ the function described in the 
					<a href="http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/">original article</a> and you&rsquo;re good to go. 
					As a bonus, this technique generates valid <abbr title="eXtensible Hypertext Markup Language">XHTML</abbr> markup.
				</dd>
			</dl>

			<h2>Highlight an individual string</h2>
			<p>
				Using the PHP function <code>highlight_string()</code>, we can generate &ldquo;<cite title="http://us.php.net/highlight-string">a syntax-highlighted 
				version of the given PHP code using the colors defined in the built-in syntax highlighter for PHP.</cite>&rdquo;
			</p>
			<dl>
				<dt>Default syntax-highlighting for any PHP string</dt>
				<dd>
					Using this code: <code>&lt;?php highlight_string('&lt;?php phpinfo(); ?&gt;'); ?&gt;</code>, we display the following syntax-highlighted output:
					<p><?php highlight_string('<?php phpinfo(); ?>'); ?></p>
				</dd>
				<dt><a href="string_example.php">String syntax-highlighting with automatic quote-escaping</a></dt>
				<dd>
					Generating highlighted code from strings of PHP code using <code>highlight_string</code> requires us to escape quotes (e.g., <code>'</code>, <code>"</code>). 
					Depending on your input string, escaping e\v\e\r\y quote may prove tedious and boring, opening wide the doors to potential error. 
					Fortunately, the following technique eliminates the frustration by cleaning things up automagically:
				</dd>

<dd class="pre"><code>&lt;?php code(); ?&gt;</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>$string = '[ place your "highly quoted" PHP string here ]';</code><br />
<code>&lt;?php code(); ?&gt;</code><br />
<br />
<code>&lt;?php function code() {</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>static $on = false;</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>if ( !$on ) {</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>ob_start();</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>} else {</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>$buffer = "</code>&lt;<code>?\n" . ob_get_contents() . "?</code>&gt;<code>";</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>ob_end_clean();</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>highlight_string( $buffer );</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>$on = !$on;</code><br />
<code>} ?&gt;</code></dd>

				<dd>
					For more information on this method, <a href="http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/">check out the complete article on PHP Syntax Highlighting Methods</a>. 
					Meanwhile, <a href="string_example.php">click here to see this code in action</a>. 
					<em>Thanks to <a href="http://www.phella.net/">phella.net</a> for this technique!</em>
				</dd>
			</dl>

			<p><a href="http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/">Return to the tutorial &raquo;</a></p>
			<h2>References</h2>
			<ul>
				<li><a href="http://us.php.net/highlight-string" title="PHP info @ php.net: highlight_string">the highlight_string function</a></li>
				<li><a href="http://us.php.net/manual/en/function.highlight-file.php" title="PHP info @ php.net: highlight_file">the highlight_file function</a></li>
			</ul>
			<p><em>&copy; <?php echo date('Y'); ?> <a href="http://perishablepress.com/">Perishable Press</a></em></p>
		</div>
	</body>
</html>