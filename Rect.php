
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Physics Easily</title>
    <link rel="author" href="http://profiles.google.com/sethladd">
    <link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
    <script src="js/Box2D.js"></script>
        <style>
    body {
      -webkit-transform: translateZ(0);
    }
    </style>
  </head>
  <body>
    <script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
        <script src = "js/bootstrap.js"> </script>
      
        <div class="”container”" style = "font-family: 'Museo Slab'">
            <!--- Nav bar div-->
                <div class="navbar navbar-default">
                    <?php include 'navbar.php' ?>
                </div>
            <!-- Nav bar div ends -->
            <div class = "row" style = "height: 100%">
    
    <div class="col-md-9" >
      <h3>Create your simulation and sharpen your understanding</h3>
    <canvas id="c0" width="900" height="500" style="border: 5px solid black"></canvas>
    <p>Black dot is the position of the object, the yellow dot is the center of mass.
    </p>
    </div>
    <div class="col-md-3">
    <div class="row" style="margin-top:60px">
    <select multiple id="saved-worlds">
    </select>
    </div>
    <div>
      Draw: <label><input type="radio" name="draw" id="draw-on" value="1">On</label> <label><input type="radio" name="draw" id="draw-off" value="0">Off</label>
    </div>
    
    <div class="row">
            <div class="col-md-10">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a class="panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            OBJECTS
                            </h4>
                        </div>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                              <button id="create-square" type="button" class="btn btn-primary btn-block">SQUARE</button>
                            <button id="create-circle" type="button" class="btn btn-primary btn-block">CIRCLE</button>
                            <button id="create-polygon" type="button" class="btn btn-primary btn-block">PULLEY</button>
                             
                            
                            
                            </div>
                      </div>
                    </div>
                </div>
             </div>
  </div>

    <div class="row">
            <div class="col-md-10">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a class="panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            FUNCTION
                            </h4>
                        </div>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                             <button id="delete-world" type="button" class="btn btn-primary btn-block">Delete World</button>
                            <button id="play-simulation" type="button" class="btn btn-primary btn-block">PLAY</button>
                            <button id="pause-simulation" type="button" class="btn btn-primary btn-block">PAUSE</button>
                            <button id="undo-rect" type="button" class="btn btn-primary btn-block">Undo Rect</button>
                            <button id="redo-rect" type="button" class="btn btn-primary btn-block" disabled>Redo Rect</button>
                            <button id="copy-rect" type="button" class="btn btn-primary btn-block" disabled>Copy</button>
                            <button id="save-world" type="button" class="btn btn-primary btn-block">Save World</button>
                            
                            
                            </div>
                      </div>
                    </div>
                </div>
             </div>
  </div>


  <div class="row">
            <div class="col-md-10">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a class="panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            PARAMETERS
                            </h4>
                        </div>
                        </a>
                        <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="row">
                           <div class="col-md-6" style="margin-top:30px; text-align: right">Left block Mass:</div>
                           <div class="col-md-6" style = "margin-top: 30px">
                                    <input type="number" class="form-control" id="initialvelocity" >
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" style="margin-top:30px; text-align: right">Right block Mass:</div>
                           <div class="col-md-6" style = "margin-top: 30px">
                                    <input type="number" class="form-control" id="initialvelocity" >
                            </div>
                            </div>
                            <!--<div class="row">
                            <div class="col-md-6" style="margin-top:40px; text-align: right">Friction:</div>
                           <div class="col-md-6" style = "margin-top: 30px">
                                    <input type="number" class="form-control" id="initialvelocity" >
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" style="margin-top:40px; text-align: right">Gravity:</div>
                           <div class="col-md-6" style = "margin-top: 30px">
                                    <input type="number" class="form-control" id="gravity" min="-100" max="100" value="10">
                            </div>
                          </div>-->
                          <div class="row" style="margin-top:20px">
                          <div class="col-md-10" style="margin-left:20px">
                             <button id="delete-world" type="button" class="btn btn-primary btn-block">Save</button>
                          </div>
                          </div>


                            
                        </div>
                      </div>
                    </div>
                </div>
             </div>
  </div>
   
   <div class="row">
            <div class="col-md-10">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a class="panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            OTHERS
                            </h4>
                        </div>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                              <button id="create-static" type="button" class="btn btn-primary btn-block">Static</button>
                            <button id="create-dynamic" type="button" class="btn btn-primary btn-block">Dynamic</button>
                            <!--<button id="save-mass" type="button" class="btn btn-primary btn-block">Save Mass</button>
                            <input type="number" min="1" max="200" id="massPulley" value="1">
                            -->
                            </div>
                      </div>
                    </div>
                </div>
             </div>
  </div>


    
    <script>
    // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
    window.requestAnimFrame = (function(){
          return  window.requestAnimationFrame       || 
                  window.webkitRequestAnimationFrame || 
                  window.mozRequestAnimationFrame    || 
                  window.oRequestAnimationFrame      || 
                  window.msRequestAnimationFrame     || 
                  function(/* function */ callback, /* DOMElement */ element){
                    window.setTimeout(callback, 1000 / 60);
                  };
    })();
    </script>
    
    <script>

    var SCALE = 30;
    var NULL_CENTER = {x:null, y:null};
    var flag = 0;
    var shapeOfObject=0;
    var static_dynamic=0;
    
    function PulleyJoint(entity1, entity2, anchor1, anchor2) {
      this.entity1 = entity1;
      this.entity2 = entity2;
      this.anchor1 = anchor1;
      this.anchor2 = anchor2;
    }
    
    PulleyJoint.prototype.draw = function(ctx) {
      this.drawLine(ctx, this.entity1, this.anchor1);
      this.drawLine(ctx, this.entity2, this.anchor2);
    }
    
    PulleyJoint.prototype.drawLine = function(ctx, entity, anchor) {
      ctx.beginPath();
      ctx.strokeStyle = 'black';
      ctx.moveTo(entity.x * SCALE, entity.y * SCALE);
      ctx.lineTo(anchor.x * SCALE, anchor.y * SCALE);
      ctx.closePath();
      ctx.stroke();
    }
    
    function Entity(id, x, y, angle, center, color) {
      this.id = id;
      this.x = x;
      this.y = y;
      this.angle = angle || 0;
      this.center = center;
      this.color = color || "red";
      this.born = true;
      this.selected = false;
    }
    
    Entity.prototype.update = function(state) {
      this.x = state.x;
      this.y = state.y;
      this.center = state.c;
      this.angle = state.a;
    }
    
    Entity.prototype.draw = function(ctx) {
      ctx.fillStyle = 'black';
      ctx.beginPath();
      ctx.arc(this.x * SCALE, this.y * SCALE, 4, 0, Math.PI * 2, true);
      ctx.closePath();
      ctx.fill();
      
      ctx.fillStyle = 'yellow';
      ctx.beginPath();
      ctx.arc(this.center.x * SCALE, this.center.y * SCALE, 2, 0, Math.PI * 2, true);
      ctx.closePath();
      ctx.fill();
    }
    
    Entity.build = function(def) {
      if (def.radius) {
        return new CircleEntity(def.id, def.x, def.y, def.angle, NULL_CENTER, def.color, def.radius);
      } else if (def.polys) {
        return new PolygonEntity(def.id, def.x, def.y, def.angle, NULL_CENTER, def.color, def.polys);
      } else {
        return new RectangleEntity(def.id, def.x, def.y, def.angle, NULL_CENTER, def.color, def.halfWidth, def.halfHeight);
      }
    }
    
    function CircleEntity(id, x, y, angle, center, color, radius) {
      color = color || 'aqua';
      Entity.call(this, id, x, y, angle, center, color);
      this.radius = radius;
    }
    CircleEntity.prototype = new Entity();
    CircleEntity.prototype.constructor = CircleEntity;
    CircleEntity.prototype.setRadius = function(xPoint,yPoint) {
      this.radius = Math.sqrt((xPoint*xPoint)+(yPoint*yPoint));
      
    }
    
    CircleEntity.prototype.draw = function(ctx) {
      ctx.save();
      ctx.translate(this.x * SCALE, this.y * SCALE);
      ctx.rotate(this.angle);
      ctx.translate(-(this.x) * SCALE, -(this.y) * SCALE);
      
      ctx.fillStyle = this.color;
      ctx.strokeStyle = 'black';
      ctx.beginPath();
      ctx.arc(this.x * SCALE, this.y * SCALE, this.radius * SCALE, 0, Math.PI * 2, true);
      ctx.moveTo(this.x * SCALE, this.y * SCALE);
      ctx.lineTo((this.x) * SCALE, (this.y + this.radius) * SCALE);
      ctx.closePath();
      ctx.fill();
      ctx.stroke();
      
      ctx.restore();
      
      Entity.prototype.draw.call(this, ctx);
    }
    
    function RectangleEntity(id, x, y, angle, center, color, halfWidth, halfHeight) {
      Entity.call(this, id, x, y, angle, center, color);
      this.halfWidth = halfWidth;
      this.halfHeight = halfHeight;
    }
    RectangleEntity.prototype = new Entity();
    RectangleEntity.prototype.constructor = RectangleEntity;
    
    RectangleEntity.prototype.setHalfDimensions = function(halfW, halfH) {
      this.halfWidth = halfW;
      this.halfHeight = halfH;
    }
    
    RectangleEntity.prototype.draw = function(ctx) {
      ctx.save();
      ctx.translate(this.x * SCALE, this.y * SCALE);
      ctx.rotate(this.angle);
      ctx.translate(-(this.x) * SCALE, -(this.y) * SCALE);
      ctx.fillStyle = this.color;
      ctx.strokeStyle = 'green';
      ctx.lineWidth = 3;
      ctx.fillRect((this.x-this.halfWidth) * SCALE,
                   (this.y-this.halfHeight) * SCALE,
                   (this.halfWidth*2) * SCALE,
                   (this.halfHeight*2) * SCALE);
      if (this.selected) {
        ctx.strokeRect((this.x-this.halfWidth) * SCALE,
                     (this.y-this.halfHeight) * SCALE,
                     (this.halfWidth*2) * SCALE,
                     (this.halfHeight*2) * SCALE);
      }
      ctx.restore();
      
      Entity.prototype.draw.call(this, ctx);
    }
    
    function PolygonEntity(id, x, y, angle, center, color, polys) {
      Entity.call(this, id, x, y, angle, center, color);
      this.polys = polys;
    }
    PolygonEntity.prototype = new Entity();
    PolygonEntity.prototype.constructor = PolygonEntity;
    PolygonEntity.prototype.setHalfDimensions = function(polysx,polysy) {
      this.polys.x = polysx;
      this.polys.y = polysy;
    }
    
    PolygonEntity.prototype.draw = function(ctx) {
      ctx.save();
      ctx.translate(this.x * SCALE, this.y * SCALE);
      ctx.rotate(this.angle);
      ctx.translate(-(this.x) * SCALE, -(this.y) * SCALE);
      ctx.fillStyle = this.color;

      for (var i = 0; i < this.polys.length; i++) {
        var points = this.polys[i];
        ctx.beginPath();
        ctx.moveTo((this.x + points[0].x) * SCALE, (this.y + points[0].y) * SCALE);
        for (var j = 1; j < points.length; j++) {
           ctx.lineTo((points[j].x + this.x) * SCALE, (points[j].y + this.y) * SCALE);
        }
        ctx.lineTo((this.x + points[0].x) * SCALE, (this.y + points[0].y) * SCALE);
        ctx.closePath();
        ctx.fill();
        ctx.stroke();
      }

      ctx.restore();
      
      Entity.prototype.draw.call(this, ctx);
    }
    
    function DrawToggle(onId, offId) {
      this.onId = onId;
      this.offId = offId;
      this.onRadio = document.getElementById(onId);
      this.offRadio = document.getElementById(offId);
    }
    DrawToggle.prototype.isDrawing = function() {
      return this.onRadio.checked ;
    }
    
    var world = {};
    var bodiesState = null;
    var box = null;
    var drawToggle = new DrawToggle("draw-on", "draw-off");
    var newRectangle = null;
    var addedRectangles = [];
    var removedRectangles = [];
    var copyButton = document.getElementById("copy-rect");
    var selectedId = null;
    
 /*   function update(animStart) {
      if (!drawToggle.isDrawing()) {
        if (isMouseDown) {
          box.mouseDownAt(mouseX, mouseY);
        } else if (box.isMouseDown()) {
          box.mouseUp();
        }
      } else {
        if (isMouseDown) {
          selectedId = box.getBodyIdAt(mouseX, mouseY);
        }
        if (isMouseDown && selectedId) {
          for (var k in world) {
            world[k].selected = false;
          }
          world[selectedId].selected = true;
          isMouseDown = false;
          copyButton.disabled = false;
        } else if (isMouseDown && newRectangle == null) {
          // start drawing
          newRectangle = new RectangleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0, 0);
         // newRectangle = new CircleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0);

          newRectangle.born = false;
          world[newRectangle.id] = newRectangle;
        } else if (isMouseDown && newRectangle) {
          // resize
          newRectangle.setHalfDimensions(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
        } else if (!isMouseDown && newRectangle) {
          if (newRectangle.halfWidth < 0.1 || newRectangle.halfHeight < 0.1) {
            delete world[newRectangle.id];
            newRectangle = null;
          } else {
            // commit new rectangle to world
            newRectangle.born = true;
            box.addBody(newRectangle);
            addedRectangles.push(newRectangle);
            newRectangle = null;
          }

        }
      }
      
      box.update();
      bodiesState = box.getState();
      
      for (var id in bodiesState) {
        var entity = world[id];
        if (entity) entity.update(bodiesState[id]);
      }
    }
    */
    function drawSquare(){
      if (!drawToggle.isDrawing()) {
        if (isMouseDown) {
          box.mouseDownAt(mouseX, mouseY);
        } else if (box.isMouseDown()) {
          box.mouseUp();
        }
      } else {
        if (isMouseDown) {
          selectedId = box.getBodyIdAt(mouseX, mouseY);
        }
        if (isMouseDown && selectedId) {
          for (var k in world) {
            world[k].selected = false;
          }
          world[selectedId].selected = true;
          isMouseDown = false;
          copyButton.disabled = false;
        } else if (isMouseDown && newRectangle == null) {
          // start drawing
          newRectangle = new RectangleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0, 0);
         // newRectangle = new CircleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0);

          newRectangle.born = false;
          world[newRectangle.id] = newRectangle;
        } else if (isMouseDown && newRectangle) {
          // resize
          newRectangle.setHalfDimensions(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
        } else if (!isMouseDown && newRectangle) {
          if (newRectangle.halfWidth < 0.1 || newRectangle.halfHeight < 0.1) {
            delete world[newRectangle.id];
            newRectangle = null;
          } else {
            // commit new rectangle to world
            newRectangle.born = true;
            box.addBody(newRectangle);
            addedRectangles.push(newRectangle);
            newRectangle = null;
          }

        }
      }
    }

    function drawCircle(){
       if (!drawToggle.isDrawing()) {
        if (isMouseDown) {
          box.mouseDownAt(mouseX, mouseY);
        } else if (box.isMouseDown()) {
          box.mouseUp();
        }
      } else {
        if (isMouseDown) {
          selectedId = box.getBodyIdAt(mouseX, mouseY);
        }
        if (isMouseDown && selectedId) {
          for (var k in world) {
            world[k].selected = false;
          }
          world[selectedId].selected = true;
          isMouseDown = false;
          copyButton.disabled = false;
        } else if (isMouseDown && newRectangle == null) {
          // start drawing
          //newRectangle = new RectangleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0, 0);
          newRectangle = new CircleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0);

          newRectangle.born = false;
          world[newRectangle.id] = newRectangle;
        } else if (isMouseDown && newRectangle) {
          // resize
          //newRectangle.setRadius(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
          newRectangle.setRadius(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
        } else if (!isMouseDown && newRectangle) {
          if (newRectangle.radius< 0.1) {
            delete world[newRectangle.id];
            newRectangle = null;
          } else {
            // commit new rectangle to world
            newRectangle.born = true;
            box.addBody(newRectangle);
            addedRectangles.push(newRectangle);
            newRectangle = null;
          }

        }
      }
    }

     function drawPolygon(){
      var pol = [{x: 0, y: 0}, {x: 1, y: 0}, {x: 0, y:2}];
       if (!drawToggle.isDrawing()) {
        if (isMouseDown) {
          box.mouseDownAt(mouseX, mouseY);
        } else if (box.isMouseDown()) {
          box.mouseUp();
        }
      } else {
        if (isMouseDown) {
          selectedId = box.getBodyIdAt(mouseX, mouseY);
        }
        if (isMouseDown && selectedId) {
          for (var k in world) {
            world[k].selected = false;
          }
          world[selectedId].selected = true;
          isMouseDown = false;
          copyButton.disabled = false;
        } else if (isMouseDown && newRectangle == null) {
          // start drawing
          //newRectangle = new RectangleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0, 0);
          newRectangle = new PolygonEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, {x:10 , y:10});

          newRectangle.born = false;
          world[newRectangle.id] = newRectangle;
        } else if (isMouseDown && newRectangle) {
          // resize
          //newRectangle.setRadius(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
          newRectangle.setHalfDimensions(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
        } else if (!isMouseDown && newRectangle) {
          
            // commit new rectangle to world
            newRectangle.born = true;
            box.addBody(newRectangle);
            addedRectangles.push(newRectangle);
            newRectangle = null;
          

        }
      }
    }

   
    
  /*  function drawPolygon(){
      this.fixDef.density = 1.0;
      this.fixDef.friction = 0.5;
      this.fixDef.restitution = 0.2;

      this.bodyDef = new b2BodyDef;
      this.bodyDef.type = b2Body.b2_dynamicBody;
      this.fixDef.shape = new b2PolygonShape;

      var points = [{x: 0, y: 0}, {x: 1, y: 0}, {x: 0, y:2}]
       

      for (var i = 0; i < entity.points.length; i++) {
      var vec = new b2Vec2();
      vec.Set(entity.points[i].x, entity.points[i].y);
      points[i] = vec;
      }

      this.fixDef.shape.SetAsArray(points, points.length);

      this.bodyDef.position.x = x;
      this.bodyDef.position.y = y;
      this.world.CreateBody(this.bodyDef).CreateFixture(this.fixDef);
      }
      */

 /*   function update(animStart) {
      if (!drawToggle.isDrawing()) {
        if (isMouseDown) {
          box.mouseDownAt(mouseX, mouseY);
        } else if (box.isMouseDown()) {
          box.mouseUp();
        }
      } else {
        if (isMouseDown) {
          selectedId = box.getBodyIdAt(mouseX, mouseY);
        }
        if (isMouseDown && selectedId) {
          for (var k in world) {
            world[k].selected = false;
          }
          world[selectedId].selected = true;
          isMouseDown = false;
          copyButton.disabled = false;
        } else if (isMouseDown && newRectangle == null) {
          // start drawing
          //newRectangle = new RectangleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0, 0);
          newRectangle = new CircleEntity(Date.now(), mouseX, mouseY, 0, NULL_CENTER, null, 0);

          newRectangle.born = false;
          world[newRectangle.id] = newRectangle;
        } else if (isMouseDown && newRectangle) {
          // resize
          //newRectangle.setRadius(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
          newRectangle.setRadius(Math.abs((mouseX - newRectangle.x) / 2), Math.abs((mouseY - newRectangle.y) / 2));
        } else if (!isMouseDown && newRectangle) {
          if (newRectangle.radius< 0.1) {
            delete world[newRectangle.id];
            newRectangle = null;
          } else {
            // commit new rectangle to world
            newRectangle.born = true;
            box.addBody(newRectangle);
            addedRectangles.push(newRectangle);
            newRectangle = null;
          }

        }
      }
      
      box.update();
      bodiesState = box.getState();
      
      for (var id in bodiesState) {
        var entity = world[id];
        if (entity) entity.update(bodiesState[id]);
      }
    }
    */

    function update(animStart) {
      if(shapeOfObject==0){
        drawSquare();
      }
      if(shapeOfObject==1){
        drawCircle();
      }
      if(shapeOfObject==2){
        addPulley();
      }

      
      if (isMouseDown) {
        box.mouseDownAt(mouseX, mouseY);
      } else if (box.isMouseDown()) {
        box.mouseUp();
      }
      
      box.update();
      bodiesState = box.getState();
      
      for (var id in bodiesState) {
        var entity = world[id];
        if (entity) entity.update(bodiesState[id]);
      }
    }
    
    var canvas = document.getElementById("c0");
    var ctx = canvas.getContext("2d");
    var canvasWidth = canvas.width;
    var canvasHeight = canvas.height;
    
    function draw() {
      //console.log("d");
      
      ctx.clearRect(0, 0, canvasWidth, canvasHeight);
      for (var id in world) {
        var entity = world[id];
        entity.draw(ctx);
      }
    }
    var massq;
    document.getElementById("save-mass").addEventListener("click", function(e) {
      massq = document.getElementById('massPulley').value;
     // massq=0.5;
      console.log(massq);
      
    });

    //massq=0.5;

    

   

     function addPulley() {
      //console.log(massq);
     // massq = document.getElementById('massPulley').value;
      var initialStatePulley = [

      {id: "ground", x: canvasWidth / 2 / SCALE, y: canvasHeight/ SCALE, halfHeight: 0.5, halfWidth: canvasWidth / SCALE, color: 'yellow'},
      //{id: "box1", x: 5, y: 6, halfHeight: 1, halfWidth: 1},
      {id: "box2", x: 7, y: 8, halfHeight: 0.5, halfWidth: 0.5},
      {id: "box1", x: 4, y: 8, radius: massq},
      {id: "pulleycircle", x: 5.5, y: 4, radius:1.5 },
     // {id: "triangle", x: 5, y: 5, points: [{x: 0, y: 0}, {x: 1, y: 0}, {x: 0, y:2}]}
      
    ];
      for (var i = 0; i < initialStatePulley.length; i++) {
        world[initialStatePulley[i].id] = Entity.build(initialStatePulley[i]);
      }
      
      box = new bTest(60, false, canvasWidth, canvasHeight, SCALE);
      box.setBodies(world);
      box.addPulleyJoint("box1", "box2", {x:4, y:4}, {x:7, y:4});
      //box.addPulleyJoint("box3", "box4", {x:6, y:6}, {x:10, y:6});
      world['pulley'] = new PulleyJoint(world['box1'], world['box2'], {x:4, y:4}, {x:7, y:4});
     // world['pulley'] = new PulleyJoint(world['box3'], world['box4'], {x:6, y:6}, {x:10, y:6});
      
     // setTimeout(function() {
       // init();
      //}, 7000000);
    }

    var initialStateTriangle = {
                        "0": {id: 0, x: 5, y: 5, points: [{x: 0, y: 0}, {x: 1, y: 0}, {x: 0, y:2}]},
                        };

    function addTri() {
      for (var i in initialStateTriangle) {
        world[i] = Entity.build(initialStateTriangle[i]);
      }
      
      box = new bTest(60, false, canvasWidth, canvasHeight, SCALE);
      box.setBodiesone(world);
      
      setTimeout(function() {
        init();
      }, 5000);
    }                    
    
    var defaultInitialState = initialState = {
      "ground": {id: "ground", x: canvasWidth / 2 / SCALE, y: canvasHeight/ SCALE, halfHeight: 0.5, halfWidth: canvasWidth / SCALE, color: 'yellow'},
     // "triangle": {id: 0, x: 5, y: 5, points: [{x: 0, y: 0}, {x: 5, y: 0}, {x: 0, y:10}]}
    };
    
    var running = true;
    
    function init() {
      world = {};
      addedRectangles = [];
      removedRectangles = [];
      for (var i in initialState) {
        world[initialState[i].id] = Entity.build(initialState[i]);
      }
      
      box = new bTest(60, false, canvasWidth, canvasHeight, SCALE);
      box.setBodies(world);
      
      // setTimeout(function() {
      //   init();
      // }, 7000);
    }
    
    /* ---- INPUT ----------------------------- */
   /* var mouseX, mouseY, isMouseDown;
    
    canvas.addEventListener("mousedown", function(e) {
       isMouseDown = true;
       handleMouseMove(e);
       document.addEventListener("mousemove", handleMouseMove, true);
    }, true);
    
    document.addEventListener("mouseup", function() {
        if (!isMouseDown) return;
       document.removeEventListener("mousemove", handleMouseMove, true);
       isMouseDown = false;
       mouseX = undefined;
       mouseY = undefined;
    }, true);
    
    function handleMouseMove(e) {
       mouseX = (e.clientX - canvas.getBoundingClientRect().left) / SCALE;
       mouseY = (e.clientY - canvas.getBoundingClientRect().top) / SCALE;
    };*/

     var mouseX, mouseY, isMouseDown;
    
    canvas.addEventListener("mousedown", function(e) {
       isMouseDown = true;
       handleMouseMove(e);
       console.log("mousedownone");
       document.addEventListener("mousemove", handleMouseMove, true);
    }, true);
    
    canvas.addEventListener("mouseup", function() {
       document.removeEventListener("mousemove", handleMouseMove, true);
       console.log("mouseupone");
       isMouseDown = false;
       mouseX = undefined;
       mouseY = undefined;
    }, true);
    
    function handleMouseMove(e) {
       mouseX = (e.clientX - canvas.getBoundingClientRect().left) / SCALE;
       mouseY = (e.clientY - canvas.getBoundingClientRect().top) / SCALE;
    };  
    
    /* ------------------------------------------ */
    
    document.addEventListener("DOMContentLoaded", function() {
      init();
      
      loadSavedWorlds();
      
      (function loop(animStart) {
        update(animStart);
        draw();
        requestAnimFrame(loop);
      })();
    }, false);
    
    document.getElementById("undo-rect").addEventListener("click", function(e) {
      if (addedRectangles.length == 0) return;
      var undid = addedRectangles.pop();
      removedRectangles.push(undid);
      delete world[undid.id];
      box.removeBody(undid.id);
      document.getElementById("redo-rect").disabled = false;
      if (addedRectangles.length == 0) e.target.disabled = true;
    });
    
    document.getElementById("redo-rect").addEventListener("click", function(e) {
      if (removedRectangles.length == 0) return;
      var redid = removedRectangles.pop();
      addedRectangles.push(redid);
      world[redid.id] = redid;
      box.addBody(redid);
      document.getElementById("undo-rect").disabled = false;
      if (removedRectangles.length == 0) e.target.disabled = true;
    });
    
    copyButton.addEventListener("click", function(e) {
      if (selectedId == null) return;
      var entity = world[selectedId];
      var copy = new RectangleEntity(Date.now(), entity.x, entity.y, entity.angle, entity.center, entity.color, entity.halfWidth, entity.halfHeight);
      world[copy.id] = copy;
      box.addBody(copy);
      addedRectangles.push(copy);
    });
    
    document.getElementById("save-world").addEventListener("click", function(e) {
      var select = document.getElementById("saved-worlds");
      var key = Date.now();
      localStorage[key] = JSON.stringify(world);
      select.appendChild(new Option(key));
    });
    
    document.getElementById("saved-worlds").addEventListener("click", function(e) {
      initialState = JSON.parse(localStorage[e.target.value]);
      init();
    });
    
    document.getElementById("delete-world").addEventListener("click", function(e) {
      var select = document.getElementById("saved-worlds");
      localStorage.removeItem(select.value);
      loadSavedWorlds();
      initialState = defaultInitialState;
      init();
    });

     document.getElementById("play-simulation").addEventListener("click", function(e) {
      flag = 1;
      console.log("vgfhdludgsg");
      
    });

     document.getElementById("pause-simulation").addEventListener("click", function(e) {
      flag = 0;
      
    });

     document.getElementById("create-square").addEventListener("click", function(e) {
      shapeOfObject = 0;
      
    });

     document.getElementById("create-circle").addEventListener("click", function(e) {
      shapeOfObject = 1;
      
    });

     document.getElementById("create-polygon").addEventListener("click", function(e) {
      shapeOfObject = 2;
      
    });

     document.getElementById("create-static").addEventListener("click", function(e) {
      static_dynamic=1;
      
    });

     

     document.getElementById("create-dynamic").addEventListener("click", function(e) {
      static_dynamic=0;
      console.log(massq);
      
    });

     //var mass = document.getElementsByName('massPulley').value;
    
    function loadSavedWorlds() {
      var select = document.getElementById("saved-worlds");
      select.innerHTML = '';
      for (var k in localStorage) {
        select.appendChild(new Option(k));
      }
    }

    
    var   b2Vec2 = Box2D.Common.Math.b2Vec2

 , b2AABB = Box2D.Collision.b2AABB
 , b2BodyDef = Box2D.Dynamics.b2BodyDef
 , b2Body = Box2D.Dynamics.b2Body
 , b2FixtureDef = Box2D.Dynamics.b2FixtureDef
 , b2Fixture = Box2D.Dynamics.b2Fixture
 , b2World = Box2D.Dynamics.b2World
 , b2MassData = Box2D.Collision.Shapes.b2MassData
 , b2PolygonShape = Box2D.Collision.Shapes.b2PolygonShape
 , b2CircleShape = Box2D.Collision.Shapes.b2CircleShape
 , b2DebugDraw = Box2D.Dynamics.b2DebugDraw
 , b2RevoluteJointDef = Box2D.Dynamics.Joints.b2RevoluteJointDef
 , b2MouseJointDef =  Box2D.Dynamics.Joints.b2MouseJointDef
 , b2PulleyJointDef = Box2D.Dynamics.Joints.b2PulleyJointDef
   ;
   
   

function bTest(intervalRate, adaptive, width, height, scale) {
  //var gra=parseInt(document.getElementById('gravity').value);
  //console.log(gra);
  this.intervalRate = parseInt(intervalRate);
  this.adaptive = adaptive;
  this.width = width;
  this.height = height;
  this.scale = scale;
  
  this.bodiesMap = {};

  if(flag==0){
  this.world = new b2World(
    
      new b2Vec2(0,10)
    
    
            //gravity
     ,  true                 //allow sleep
  );
};

  
 




  this.fixDef = new b2FixtureDef;
  this.fixDef.density = 1.0;
  this.fixDef.friction = 0.5;
  this.fixDef.restitution = 0.2;
}

// bTest.prototype.buildGround = function() {
//   //create ground
//   var bodyDef = new b2BodyDef;
//   bodyDef.type = b2Body.b2_staticBody;
// 
//   // positions the center of the object (not upper left!)
//   bodyDef.position.x = this.width / 2 / this.scale;
//   bodyDef.position.y = this.height / 2 / this.scale;
//   bodyDef.angle = (45*Math.PI) / 180; // radians
//   bodyDef.userData = '__BODY__';
// 
//   this.fixDef.shape = new b2PolygonShape;
// 
//   // half width, half height. eg actual height here is 1 unit
//   this.fixDef.shape.SetAsBox((this.width-(this.width*0.1) / this.scale) / 2, (10/this.scale) / 2);
//   this.registerBody(bodyDef).CreateFixture(this.fixDef);
// }

bTest.prototype.update = function() {
  var start = Date.now();
  var stepRate = (this.adaptive) ? (now - this.lastTimestamp) / 1000 : (1 / this.intervalRate);
  var fps=60;
  var timeStep=1.0/(fps*0.8);
  if(flag==1){

  this.world.Step(
         timeStep
            //frame-rate
      ,  10       //velocity iterations
      ,  10       //position iterations
   );
}
   this.world.ClearForces();
   return (Date.now() - start);
}

bTest.prototype.getState = function() {
  var state = {};
  for (var b = this.world.GetBodyList(); b; b = b.m_next) {
    if (b.IsActive() && typeof b.GetUserData() !== 'undefined' && b.GetUserData() != null) {
        state[b.GetUserData()] = this.getBodySpec(b);
    }
  }
  return state;
}

bTest.prototype.getBodySpec = function(b) {
    return {x: b.GetPosition().x, y: b.GetPosition().y, a: b.GetAngle(), c: {x: b.GetWorldCenter().x, y: b.GetWorldCenter().y}};
}

bTest.prototype.setBodies = function(bodyEntities) {
    for(var id in bodyEntities) {
        var entity = bodyEntities[id];
        
        if (!bodyEntities[id].born) continue;
        
        this.addBody(entity);
    }
    this.ready = true;
}

bTest.prototype.addBody = function(entity) {
  var bodyDef = new b2BodyDef;
  if (entity.id == 'ground') {
      bodyDef.type = b2Body.b2_staticBody;
  } else if (entity.id =='pulleycircle') {
      bodyDef.type = b2Body.b2_staticBody;
  } else if (static_dynamic==1) {
      bodyDef.type = b2Body.b2_staticBody;
  } else if(static_dynamic==0) {
      bodyDef.type = b2Body.b2_dynamicBody;
  }
  
  bodyDef.position.x = entity.x;
  bodyDef.position.y = entity.y;
  bodyDef.userData = entity.id;
  bodyDef.angle = entity.angle;
  var body = this.registerBody(bodyDef);
  
  if (entity.radius) {
      this.fixDef.shape = new b2CircleShape(entity.radius);
      body.CreateFixture(this.fixDef);
  } else if (entity.points) {
      /*for (var j = 0; j < entity.polys.length; j++) {
          var points = entity.polys[j];
          var vecs = [];
          for (var i = 0; i < points.length; i++) {
              var vec = new b2Vec2();
              vec.Set(points[i].x, points[i].y);
              vecs[i] = vec;
          }
          this.fixDef.shape = new b2PolygonShape;
          this.fixDef.shape.SetAsArray(vecs, vecs.length);
          body.CreateFixture(this.fixDef);
      }*/
       var points = [];
            for (var i = 0; i < entity.points.length; i++) {
                var vec = new b2Vec2();
                vec.Set(entity.points[i].x, entity.points[i].y);
                points[i] = vec;
            }
            this.fixDef.shape = new b2PolygonShape;
            this.fixDef.shape.SetAsArray(points, points.length);
            body.CreateFixture(this.fixDef);
  } else {
      this.fixDef.shape = new b2PolygonShape;
      this.fixDef.shape.SetAsBox(entity.halfWidth, entity.halfHeight);
      body.CreateFixture(this.fixDef);
  }
}

bTest.prototype.setBodiesone = function(bodyEntities) {
    var bodyDef = new b2BodyDef;
    this.bodyDef.type = b2Body.b2_dynamicBody;
    for(var id in bodyEntities) {
        var entity = bodyEntities[id];
        if (entity.radius) {
            this.fixDef.shape = new b2CircleShape(entity.radius);
        } else if (entity.points) {
            var points = [];
            for (var i = 0; i < entity.points.length; i++) {
                var vec = new b2Vec2();
                vec.Set(entity.points[i].x, entity.points[i].y);
                points[i] = vec;
            }
            this.fixDef.shape = new b2PolygonShape;
            this.fixDef.shape.SetAsArray(points, points.length);
        } else {
            this.fixDef.shape = new b2PolygonShape;
            this.fixDef.shape.SetAsBox(entity.halfWidth, entity.halfHeight);
        }
       this.bodyDef.position.x = entity.x;
       this.bodyDef.position.y = entity.y;
       this.bodyDef.userData = entity.id;
       this.world.CreateBody(this.bodyDef).CreateFixture(this.fixDef);
    }
    this.ready = true;
}


bTest.prototype.removeBody = function(entityId) {
  var body = this.bodiesMap[entityId];
  this.world.DestroyBody(body);
  delete this.bodiesMap[entityId];
}

bTest.prototype.registerBody = function(bodyDef) {
    var body = this.world.CreateBody(bodyDef);
    this.bodiesMap[body.GetUserData()] = body;
    return body;
}

 function addTriangle() {
        //create simple triangle
          var bodyDef = new b2BodyDef;
          var fixDef = new b2FixtureDef;
          fixDef.density = Math.random();
          fixDef.friction = Math.random();
          fixDef.restitution = 0.2;

          bodyDef.type = b2Body.b2_dynamicBody;
          fixDef.shape = new b2PolygonShape;
          var scale = Math.random() * 60;
          fixDef.shape.SetodyT
          AsArray([
            new b2Vec2(scale*0.866 , scale*0.5),
            new b2Vec2(scale*-0.866, scale*0.5),
            new b2Vec2(0, scale*-1),
            ]);
          bodyDef.position.x = (canvasWidth-scale*2)*Math.random()+scale*2;
          bodyDef.position.y = canvasHeight - (scale*Math.random() +scale);
          box.registerBody(bodyDef).CreateFixture(fixDef);
         // box.addBody(bodyDef);
        }

bTest.prototype.addRevoluteJoint = function(body1Id, body2Id, params) {
    var body1 = this.bodiesMap[body1Id];
    var body2 = this.bodiesMap[body2Id];
    var joint = new b2RevoluteJointDef();
    joint.Initialize(body1, body2, body1.GetWorldCenter());
    if (params && params.motorSpeed) {
      joint.motorSpeed = params.motorSpeed;
      joint.maxMotorTorque = params.maxMotorTorque;
      joint.enableMotor = true;
    }
    this.world.CreateJoint(joint);
}

bTest.prototype.addPulleyJoint = function(body1Id, body2Id, groundAnchor1, groundAnchor2, params) {
  var body1 = this.bodiesMap[body1Id];
  var body2 = this.bodiesMap[body2Id];
  var ga1 = new b2Vec2(groundAnchor1.x, groundAnchor1.y);
  var ga2 = new b2Vec2(groundAnchor2.x, groundAnchor2.y);
  var pulleyJoint = new b2PulleyJointDef;
  pulleyJoint.Initialize(body1, body2, ga1, ga2, body1.GetWorldCenter(), body2.GetWorldCenter(), 1.0);
  this.world.CreateJoint(pulleyJoint);
}

bTest.prototype.mouseDownAt = function(x, y) {
  if (!this.mouseJoint) {
     var body = this.getBodyAt(x, y);
     if (body) {
        var md = new b2MouseJointDef();
        md.bodyA = this.world.GetGroundBody();
        md.bodyB = body;
        md.target.Set(x, y);
        md.collideConnected = true;
        md.maxForce = 300.0 * body.GetMass();
        this.mouseJoint = this.world.CreateJoint(md);
        body.SetAwake(true);
     }
  } else {
      this.mouseJoint.SetTarget(new b2Vec2(x, y));
  }
}
function step() 
{
    var fps = 60;
    var timeStep = 1.0/(fps * 0.8);
     
    //move the box2d world ahead
   // world.Step(timeStep , 8 , 3);
    //world.ClearForces();
     
    //redraw the world
    //draw_world(world , ctx);
     box.update();
    //call this function again after 1/60 seconds or 16.7ms
   // setTimeout(step , 1000 / fps);
}

bTest.prototype.isMouseDown = function() {
  return (this.mouseJoint != null);
}

bTest.prototype.mouseUp = function() {
  this.world.DestroyJoint(this.mouseJoint);
  this.mouseJoint = null;
  step();
}

bTest.prototype.getBodyAt = function(x, y) {
   var mousePVec = new b2Vec2(x, y);
   var aabb = new b2AABB();
   aabb.lowerBound.Set(x - 0.001, y - 0.001);
   aabb.upperBound.Set(x + 0.001, y + 0.001);
   
   // Query the world for overlapping shapes.

   var selectedBody = null;
   this.world.QueryAABB(function(fixture) {
     if(fixture.GetBody().GetType() != b2Body.b2_staticBody) {
        if(fixture.GetShape().TestPoint(fixture.GetBody().GetTransform(), mousePVec)) {
           selectedBody = fixture.GetBody();
           return false;
        }
     }
     return true;
   }, aabb);
   return selectedBody;
}

bTest.prototype.getBodyIdAt = function(x, y) {
  var body = this.getBodyAt(x, y);
  if (body) {
    return body.GetUserData();
  } else {
    return null;
  }
}

    </script>
  </body>
</html>
