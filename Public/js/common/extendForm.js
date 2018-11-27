/*
 * ExtendForm.init({
 *       action : url,
 *      target : target,//_self _blank
 *      method : method//post get
 *  }).bind({
 *      param : param
 *  }).send();
**/
var Ly = {
	createElement : function(target, config){
		var target = target || 'div';
		var config = config || {};
		var tag = document.createElement(target);
		for(var p in config){
			if(p.toLowerCase() == 'style'){
				tag.style.cssText = config[p];
			}else if(p.toLowerCase() == 'class' || p.toLowerCase() == 'cls'){
				tag.className = config[p];
			}else if(p.toLowerCase() == 'innerhtml'){
				tag.innerHtml = config[p];
			}else{
				tag.setAttribute(p, config[p]);
			}
		}
		try{
			return tag;
		}finally{
			tag = null;
		}
	}
};
/*var ExtendForm = {
    params : {},
    form : null,
    config : {},
    create : function () {
        var Form = document.createElement('form');
        Form.action = this.config.action;
        Form.method = this.config.method;
        Form.target = this.config.target;
        document.body.appendChild(this.form = Form);
        return this;
    },
    init : function (config) {
        config = config || {};
        this.config = {
            action : config.action || '?',
            method : config.method || 'post',
            target : config.target || '_self'
        };
        return this;
    },
    bind : function (data) {
        if(typeof data != 'object'){
            return null;
        }
        this.params = {};
        for(var p in data){
            switch (typeof data[p]){
                case 'string':
                case 'number':
                    this.params[p] = data[p];
                    break;
                case 'object':
                    if(data[p].constructor === Array){
                        this.params[p] = data[p].join(',');
                    }
                    break;
                case 'boolean':
                    this.params[p] = data[p];
                    break;
            }
        }
        return this;
    },
    send :function () {
        if(!this.params){
            return null;
        }
        this.create();
        for(var p in this.params){
            var Input = document.createElement('imput');
            Input.setAttribute('type', 'hidden');
            Input.setAttribute('name', p);
            Input.setAttribute('value', this.params[p]);
            //var imputHtml = '<input type="hidden" name="'+p+'" value="'+this.params[p]+'"/>';
            this.form.appendChild(Input);
        }
        this.form.submit();
        this.clear();
        return this;
    },
    clear : function () {
        var inputs = this.form.childNodes;
        for(var i = inputs.length-1;i>-1;--i){
            this.form.removeChild(inputs[i]);
            inputs[i] && (inputs[i] = null);
        }
        document.body.removeChild(this.form);
        this.form = null;
    }
};*/
var ExtendForm = {
    params : {},
    form : null,
    config : {},
    create : function () {
        document.body.appendChild(this.form = Ly.createElement('form', {
			action : this.config.action,
			method : this.config.method,
			target : this.config.target
		}));
        return this;
    },
    init : function (config) {
        config = config || {};
        this.config = {
            action : config.action || '?',
            method : config.method || 'post',
            target : config.target || '_self'
        };
        return this;
    },
    bind : function (data) {
        if(typeof data != 'object'){
            return null;
        }
        this.params = {};
        for(var p in data){
            switch (typeof data[p]){
                case 'string':
                case 'number':
                    this.params[p] = data[p];
                    break;
                case 'object':
                    if(data[p].constructor === Array){
                        this.params[p] = data[p].join(',');
                    }
                    break;
                case 'boolean':
                    this.params[p] = data[p];
                    break;
            }
        }
        return this;
    },
    send :function () {
        if(!this.params){
            return null;
        }
        this.create();
        for(var p in this.params){
            this.form.appendChild(Ly.createElement('input', {
				type : 'hidden',
				name : p,
				value : this.params[p]
			}));
        }
        this.form.submit();
        this.clear();
        return this;
    },
    clear : function () {
        var inputs = this.form.childNodes;
        for(var i = inputs.length-1;i>-1;--i){
            this.form.removeChild(inputs[i]);
            inputs[i] && (inputs[i] = null);
        }
        document.body.removeChild(this.form);
        this.form = null;
    }
};