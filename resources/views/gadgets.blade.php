<?xml version="1.0" encoding="UTF-8"?>
<Module>
    <ModulePrefs title=" Sample Game ">
    </ModulePrefs>
    <Content type="html" view="canvas"><![CDATA[
        <div id="sample">Test Game</div>
        <script type="text/javascript">
            function init() {
                document.getElementById("sample").innerHTML = " Sample Game ";
            }
            gadgets.util.registerOnLoadHandler(init);
        </script>
        ]]></Content>
</Module>
