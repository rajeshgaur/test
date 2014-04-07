function create_topic() {
    var newelement ;
    var topic_num = 1;
    var topicname = 'topic_' + topic_num;
    var form = document.getElementById('main_form');
    form.innerHTML += '<br> Topic Name : ';
    //form.appendChild(newelement);
    console.log("Das");
    newelement = document.createElement("input");
    newelement.setAttribute('type','text');
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