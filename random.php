<html>
<head>
    <style>
        *{
            margin: 0;
        }
        div{
            margin: 0 auto;
            width: 250px;
            height: 250px;
            background-color: #FFFFDD;
        }
    </style>
    <script>
        function randomCreate() {
            //获取对应select的option值
            var obj=document.getElementById('select1');
            //获得对应的索引
            var index = obj.selectedIndex;
            //获得对应的text
            var text = obj.options[index].text;
            //通过text判断选择的哪个分类k
            if (text=="A组"){
                var members=new Array("任鹏","殷婷婷","邹先松","李国胜");
            }else if(text=="B组"){
                var members=new Array("屈博杰","方绪豪","晏威");
            }else if(text=="C组"){
                var members=new Array("唐小宇","方超伟","陈信宏","汪薇");
            }else {
                var members=new Array("唐小宇","方超伟","陈信宏","汪薇","任鹏","殷婷婷","屈博杰","方绪豪","晏威","邹先松","李国胜");
            }
            //Math.floor向下取整   Math.random 0-1之间的随机数
            var i=Math.floor(Math.random()*members.length+1)-1
            document.getElementById("name").innerHTML=members[i];
        }

        function randomTeam() {
            randomNum();
            function randomNum() {
                return Math.random()-0.5;
            }
            var Team=new Array("A组","B组","C组");
            Team=Team.sort(randomNum);
            document.getElementById("name2").innerHTML=Team;
        }

    </script>
</head>
<body>
<div >
    <h2 id="name2" ></h2>
 <h2 id="name" ></h2>
</div>
<select id="select1">
    <option>A组</option>
    <option>B组</option>
    <option>C组</option>
    <option>全班</option>
</select>
<input type="button"  onclick="randomCreate()" value="点我随机选人">
<input type="button"  onclick="randomTeam()" value="点我随机选组">
</body>
</html>