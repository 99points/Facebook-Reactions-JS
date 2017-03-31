<h2>Facebook Style Reactions Plugin </h2>

<p><img src="http://wallscriptclone.com/gifreactions.gif" width="391" height="141" alt="gif" /></p>

<p>Developed by: Zeeshan Rasool (<em>Founder at <a href="http://www.99points.info/" target="_blank">http://www.99points.info</a> & <a href="http://wallscriptclone.com/" target="_blank">PHPWallScript</a></em>)</p>

<h2>About The Plugin</h2>

<p>This plugin allows you to generate a like button similar in Facebook style with option to select different reactions from the list. i-e Like, haha, sad, wow etc.</p>
<p>With very simple HTML you can convert the simple button to an interactive facebook style reaction button which will submit the selection a user will made back to the database. </p>

<h2>Demo</h2>

See the <a href="http://www.99points.info/plugins/Facebook-Style-Reactions-JS/" target="_blank">examples here</a>.

<h2>How To Use</h2>
<p>The button will look like this, we can change the default button text which is <code>LIKE</code> in this case to anything you want. The class name <code>FB_reactions</code> is also changable as long as the same names in the css are also updated. <code>data-reactions-type='horizontal'</code>, <code>data-unique-id="1"</code> and <code> data-emoji-class=""</code> are required though.</p>

<pre><code>

<a class="FB_reactions" data-reactions-type='horizontal' data-unique-id="1" data-emoji-class="" style="margin-right:40px;">
    <span style="">Like</span>
</a>

</code></pre>

<p>In above, you can change <code>data-reactions-type='horizontal'</code> to <code>data-reactions-type='vertical'</code> to change the reaction popup position from horizontal to vertical. </p>

<p><code>data-unique-id="1"</code> is the control ID which we will assign to each button so we should be able to know which button is clicked. This is for backend purpose where we need to know against which button/control we have to store the reaction selected by any user. So either this can be a random number for all controls on same page or we can assign some IDs etc. </p>
<p> <code>data-emoji-class</code> will be used to set default class when the page will be loaded. It can have any of these classes <code>like</code>, <code>love</code>, <code>haha</code>, <code>wow</code>, <code>sad</code>, <code>angry</code></p>

<p>Example to make "Wow" selected by default:</p>
<pre><code><a class="FB_reactions" data-reactions-type='vertical' data-unique-id="1" data-emoji-class="wow">
        <span>WOW</span>
    </a></code></pre>
    
<p></p>

<p>To initiate the reactions: </p>
<pre><code>$('.FB_reactions').facebookReactions();</code></pre>




<h2>License</h2>
<p>Copyright (c) 2017 Zeeshan Rasool,&nbsp;<a href="http://wallscriptclone.com/" target="_blank">http://wallscriptclone.com/</a> & <a href="http://www.99points.info/" target="_blank">http://www.99points.info</a></p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the &quot;Software&quot;), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
<p>THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
<p>&nbsp;</p>

<br />
