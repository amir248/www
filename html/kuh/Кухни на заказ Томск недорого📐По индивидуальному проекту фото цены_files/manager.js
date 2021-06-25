var widget = {
    jq: 'jq_144',
    list: [],
    queue: [],
    wrapScript: function(script, data){

        var text = '';
        if(!data){
            //todo: fix it
            return "\r\n" + script.toString() + "\r\n";
        } else if(data.onLoad == 'jq'){
            text = "jq(function(){ " + script + " });"
        } else if(data.onLoad){
            text = "jq(function(){ widget.on(scriptData); });"
        } else {
            text = script;
        }

        return "\r\n(function(jq, scriptData){\r\n" + text + "\r\n})(" + this.jq + ", " + JSON.stringify(data || "") + ");\r\n";
    },

    on: function(scriptData){
        if(this[scriptData.onLoad]){
            this.create(scriptData);
            return;
        }
        this.queue.push(scriptData);

    },

    init: function(name, widget){
        this[name] = widget;
        var w = this.queue.filter(function(item){
            return item.onLoad = name;
        });
        for(var i=0; i< w.length; w++){
            this.create(w[i]);
        }
    },

    create: function(scriptData){
        var w = new this[scriptData.onLoad](scriptData);
        this.list.push(w);
    }
};

try{
module.exports = widget;
} catch(e){
    window.widget = widget;
}