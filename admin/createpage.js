var topic_num = 0;
function create_topic() {
    var newelement ;
    topic_num++;
    var topicname = 'topic_' + topic_num;
    var form = document.getElementById('main_form');
    form.innerHTML += '<br> Topic Name : ';
    //form.appendChild(newelement);
    console.log("Das");
    newelement = document.createElement("input");
    newelement.setAttribute('type','text');
    newelement.setAttribute('name',topicname);
   // newelement.setAttribute('type','text');
    //newelement.setAttribut('name', topicname);
    form.appendChild(newelement);
    form.innerHTML += '<br> Content &nbsp';
    newelement = document.createElement("textarea");
    newelement.setAttribute('name',topicname +'_content');
    newelement.setAttribute('cols','80');
    newelement.setAttribute('rows','6');
    form.appendChild(newelement);
    form.innerHTML += '<br><br>';
}