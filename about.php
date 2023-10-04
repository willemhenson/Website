<!DOCTYPE html>
<html>
<?php require('head.txt'); ?>
<body>
<?php require('header.txt'); ?>
    <main>
        <h1>About Me</h1>
        <div class="separator"></div>
        <h2>Bachelor of Computer Science and Mathematics<br>The University of Manchester</h2>
        <img class="uni-image" src="https://eu-assets.simpleview-europe.com/manchester2016/imageresizer/?image=%2Fdmsimgs%2Fthe-university-of-manchester-min_1219152588.jpg&action=ProductDetailFullWidth2">
        <p>Chair and Lead of BSc group project of six people. Implementing a full-stack website. <a href="javascript:" id="open-modal">See more info.</a></p>
        <!-- The Modal -->
            <div id="modal" class="modal">
                <!-- Modal content -->
                    <div class="modal-content">
                        <span id="close-modal" class="close">&times;</span>
                        <p>First-year student at The University of Manchester studying Computer Science and Mathematics.
                        An analytical and critical thinker looking for relevant work placements.<br><br>
                        Background in solving complex problems with a passion for learning new methods and systems.
                        An avid programmer and keen to expand understanding of the discipline.<br><br>
                        Achieved in the top 2% of mathematicians in the school year and attained 100% marking on both Mathematics and Further Mathematics mock A Level seasons.<br><br>
                        Deeply fascinated by both theoretical and industrial applications of computing and an experienced team member who can apply real knowledge to practical situations.</p>
                        </div>
            </div>
            <script>
                document.getElementById('open-modal').onclick = function() {document.getElementById('modal').style.display = 'block';}
                document.getElementById('close-modal').onclick = function() {document.getElementById('modal').style.display = 'none';}
                window.onclick = function(event) {if (event.target == modal) modal.style.display = "none";}
            </script>
        <!-- End of Modal -->
        <div class="separator"></div>
        <h3>Please see <a href="projects.php">projects page</a> for latest developments.</h3>
        <div class="separator"></div>
        <table>
            <tr><th>Language Comprehension</th></tr>
            <tr><td>Python</td><td>★★★★☆</td></tr>
            <tr><td>HTML/CSS</td><td>★★★☆☆</td></tr>
            <tr><td>JavaScript</td><td>★★★☆☆</td></tr>
            <tr><td>PHP</td><td>★★★☆☆</td></tr>
            <tr><td>MySQL</td><td>★★☆☆☆</td></tr>
            <tr><td>Java</td><td>★★★☆☆</td></tr>
        </table>
        <table>
            <tr><th>Education</th></tr>
            <tr><td>(A2) Mathematics</td><td>A★</td></tr>
            <tr><td>(A2) Further Mathematics</td><td>A★</td></tr>
            <tr><td>(A2) Physics</td><td>A★</td></tr>
            <tr><td>GCSEs</td><td>999999988</td></tr>
        </table>
        <table>
            <tr><th>UKMT Maths Challenge</th></tr>
            <tr><td>2015</td><td>🥉</td></tr>
            <tr><td>2016</td><td>🥈</td></tr>
            <tr><td>2017</td><td>🥈</td></tr>
            <tr><td>2018</td><td>🥇</td></tr>
            <tr><td>2019</td><td>🥇</td></tr>
            <tr><td>2020</td><td>🥇</td></tr>
            <tr><td>2021</td><td>🥇</td></tr>
            <tr><td>2022</td><td>🥇</td></tr>
        </table>
        <table>
            <tr><th>Experience</th></tr>
            <tr><td>McDonald's</td><td>Team Member</td><td>2020 2021</td></tr>
            <tr><td>The University of Manchester</td><td>SoE Undergraduate</td><td>2022 2023-</td></tr>
            <tr><td>Agena Group Ltd.</td><td>Junior Software Developer</td><td>2023-</td></tr>
        </table>
        <table>
            <tr><th>Skills</th></tr>
            <tr><td>Programming</td><td>★★★★☆</td></tr>
            <tr><td>Web Design</td><td>★★★★☆</td></tr>
            <tr><td>Computer Hardware</td><td>★★★★★</td></tr>
            <tr><td>Video Production</td><td>★★★☆☆</td></tr>
            <tr><td>Problem Solving</td><td>★★★★★</td></tr>
            <tr><td>Communication</td><td>★★★★☆</td></tr>
        </table>
    </main>
<?php require('footer.txt'); ?>
</body>
</html>