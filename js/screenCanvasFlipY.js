<<<<<<< HEAD
<<<<<<< HEAD
//////////
// Start: screen canvas flip y-axis
//////////

// Requires MooTools library

var screenCanvas;
var screenCanvasGC; // Graphics 2D context

var screenWidth;
var screenHeight;

var	screenIsAngleMeasurementInDegrees = true;

var	screenRadiansPerDegree = Math.PI / 180.0;

var screenTwoPi = 2.0 * Math.PI;

var screenIsBigPoints = true;

var screenDefaultAreaColor     = 'yellow';
var screenDefaultLineColor     = 'black';
var screenDefaultLineThickness = 2;

var screenTurtleX         = 0.0;
var screenTurtleY         = 0.0;
var screenTurtleHeading   = 0.0;
var screenTurtleIsPenDown = true;

var screenDefaultVectorTipAngle  = 30; // Degrees.
var screenDefaultVectorTipSize   = 10;
var screenDefaultVectorTipFactor = 0.20;




function screenInitialize(canvasId)
{
	screenCanvas = $(canvasId);

	screenCanvasGC = screenCanvas.getContext('2d');

	screenWidth  = screenCanvas.width;
	screenHeight = screenCanvas.height;
}




function screenAddEvent(event, handlerFunction)
{
	screenCanvas.addEvent(event, handlerFunction);
}




function screenSetupGraph()
{
	screenClear();

	screenSetAreaColor(screenDefaultAreaColor);

	screenSetLineThickness(screenDefaultLineThickness);
	screenSetLineColor(screenDefaultLineColor);
}




function screenClear()
{
	screenCanvasGC.clearRect(0, 0, screenWidth, screenHeight);
}




function screenSetLineThickness(thickness)
{
	screenCanvasGC.lineWidth = thickness;
}




function screenSetLineCap(capStyle) // 'butt', 'round', or 'square'
{
	screenCanvasGC.lineCap = capStyle;
}




function screenSetLineJoin(joinStyle) // 'round', 'bevel', or 'miter''
{
	screenCanvasGC.lineJoin = joinStyle;
}




function screenSetLineColor(color)
{
	screenCanvasGC.strokeStyle = color;
}




function screenSetAreaColor(color)
{
	screenCanvasGC.fillStyle = color;
}




function screenDrawLineSegment(x1, y1, x2, y2)
{
	// Flip y-axis.
	y1 = screenHeight - y1;
	y2 = screenHeight - y2;
	
	screenCanvasGC.beginPath();
	screenCanvasGC.moveTo(x1, y1);
	screenCanvasGC.lineTo(x2, y2);
	screenCanvasGC.stroke();
}




function screenDrawArcLine(x, y, r, angle1, angle2)
{
	// Flip y-axis.
	y = screenHeight - y;
	
	if(screenIsAngleMeasurementInDegrees)
	{
		angle1 *= screenRadiansPerDegree;
		angle2 *= screenRadiansPerDegree;
	}
	
	angle1 = screenTwoPi - angle1;
	angle2 = screenTwoPi - angle2;

	while(angle1 < 0.0)
	{
		angle1 += screenTwoPi;
	}

	while(angle1 > screenTwoPi)
	{
		angle1 -= screenTwoPi;
	}

	while(angle2 < 0.0)
	{
		angle2 += screenTwoPi;
	}

	while(angle2 > screenTwoPi)
	{
		angle2 -= screenTwoPi;
	}

	screenCanvasGC.beginPath();
	screenCanvasGC.arc(x, y, r, angle1, angle2, true);
	screenCanvasGC.stroke();
}




function screenRectangleArea(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.fillRect(x, y, width, height);
}




function screenRectangleLine(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.strokeRect(x, y, width, height);
}




function screenRectangleClear(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.clearRect(x, y, width, height);
}




function screenInitializeTurtle()
{
	screenTurtleX         = 0.0;
	screenTurtleY         = 0.0;
	screenTurtleHeading   = 0.0;
	screenTurtleIsPenDown = true;
}




function screenPenUp()
{
	screenTurtleIsPenDown = false;
}




function screenPenDown()
{
	screenTurtleIsPenDown = true;
}




function screenSetH(a)
{
	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	while(a < 0.0)
	{
		a += screenTwoPi;
	}

	while(a > screenTwoPi)
	{
		a -= screenTwoPi;
	}

	screenTurtleHeading = a;
}




function screenHome()
{
	screenTurtleX       = 0;
	screenTurtleY       = 0;
	screenTurtleHeading = 0;
}




function screenForward(d)
{
	var turtleNewX;
	var turtleNewY;

	turtleNewX = screenTurtleX + d * Math.cos(screenTurtleHeading);
	turtleNewY = screenTurtleY + d * Math.sin(screenTurtleHeading);

	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, turtleNewX, turtleNewY);
	}

	screenTurtleX = turtleNewX;
	screenTurtleY = turtleNewY;
}




function screenBack(d)
{
	screenForward(-d);
}




function screenRight(a)
{
	var turtleNewHeading;

	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	turtleNewHeading = screenTurtleHeading - a;

	while(turtleNewHeading < 0.0)
	{
		turtleNewHeading += screenTwoPi;
	}

	while(turtleNewHeading > screenTwoPi)
	{
		turtleNewHeading -= screenTwoPi;
	}

	screenTurtleHeading = turtleNewHeading;
}




function screenLeft(a)
{
	screenRight(-a);
}




function screenSetX(x)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, screenTurtleY);
	}

	screenTurtleX = x;
}




function screenSetY(y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, screenTurtleX, y);
	}

	screenTurtleY = y;
}




function screenSetXY(x, y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, y);
	}

	screenTurtleX = x;
	screenTurtleY = y;
}




function screenDrawVector(x, y, magnitude, direction, tipSize)
{
	var vectorTipX;
	var vectorTipY;
	
	// Vector line.
	screenPenUp();
	screenSetXY(x, y);
	screenPenDown();
	screenSetH(direction);
	screenForward(magnitude);
	vectorTipX = screenTurtleX;
	vectorTipY = screenTurtleY;
	
	// Vector tip.
	var tipAngle = screenDefaultVectorTipAngle;

	if(!screenIsAngleMeasurementInDegrees)
	{
		tipAngle *= screenRadiansPerDegree; // Radians.
	}

	var tipSize;
	
	if(tipSize > 0)
	{
		tipSize = screenDefaultVectorTipSize;
	}
	else
	{
		tipSize = screenDefaultVectorTipFactor * magnitude;
	}
	
	screenLeft(tipAngle);
	screenBack(tipSize);
	screenPenUp();
	screenForward(tipSize);
	screenPenDown();
	screenRight(2 * tipAngle);
	screenBack(tipSize);
	
	return { x : vectorTipX, y : vectorTipY };
}




function screenSetDegrees()
{
	screenIsAngleMeasurementInDegrees = true;
}


function screenSetRadians()
{
	screenIsAngleMeasurementInDegrees = false;
}




function screenSine(a)
{
	return Math.sin((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenCosine(a)
{
	return Math.cos((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenTangent(a)
{
	return Math.tan((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}




function screenRandomX()
{
	return Math.floor(Math.random() * screenWidth);
}


function screenRandomY()
{
	return Math.floor(Math.random() * screenHeight);
}

//////////
// End: screen canvas flip y-axis
=======
//////////
// Start: screen canvas flip y-axis
//////////

// Requires MooTools library

var screenCanvas;
var screenCanvasGC; // Graphics 2D context

var screenWidth;
var screenHeight;

var	screenIsAngleMeasurementInDegrees = true;

var	screenRadiansPerDegree = Math.PI / 180.0;

var screenTwoPi = 2.0 * Math.PI;

var screenIsBigPoints = true;

var screenDefaultAreaColor     = 'yellow';
var screenDefaultLineColor     = 'black';
var screenDefaultLineThickness = 2;

var screenTurtleX         = 0.0;
var screenTurtleY         = 0.0;
var screenTurtleHeading   = 0.0;
var screenTurtleIsPenDown = true;

var screenDefaultVectorTipAngle  = 30; // Degrees.
var screenDefaultVectorTipSize   = 10;
var screenDefaultVectorTipFactor = 0.20;




function screenInitialize(canvasId)
{
	screenCanvas = $(canvasId);

	screenCanvasGC = screenCanvas.getContext('2d');

	screenWidth  = screenCanvas.width;
	screenHeight = screenCanvas.height;
}




function screenAddEvent(event, handlerFunction)
{
	screenCanvas.addEvent(event, handlerFunction);
}




function screenSetupGraph()
{
	screenClear();

	screenSetAreaColor(screenDefaultAreaColor);

	screenSetLineThickness(screenDefaultLineThickness);
	screenSetLineColor(screenDefaultLineColor);
}




function screenClear()
{
	screenCanvasGC.clearRect(0, 0, screenWidth, screenHeight);
}




function screenSetLineThickness(thickness)
{
	screenCanvasGC.lineWidth = thickness;
}




function screenSetLineCap(capStyle) // 'butt', 'round', or 'square'
{
	screenCanvasGC.lineCap = capStyle;
}




function screenSetLineJoin(joinStyle) // 'round', 'bevel', or 'miter''
{
	screenCanvasGC.lineJoin = joinStyle;
}




function screenSetLineColor(color)
{
	screenCanvasGC.strokeStyle = color;
}




function screenSetAreaColor(color)
{
	screenCanvasGC.fillStyle = color;
}




function screenDrawLineSegment(x1, y1, x2, y2)
{
	// Flip y-axis.
	y1 = screenHeight - y1;
	y2 = screenHeight - y2;
	
	screenCanvasGC.beginPath();
	screenCanvasGC.moveTo(x1, y1);
	screenCanvasGC.lineTo(x2, y2);
	screenCanvasGC.stroke();
}




function screenDrawArcLine(x, y, r, angle1, angle2)
{
	// Flip y-axis.
	y = screenHeight - y;
	
	if(screenIsAngleMeasurementInDegrees)
	{
		angle1 *= screenRadiansPerDegree;
		angle2 *= screenRadiansPerDegree;
	}
	
	angle1 = screenTwoPi - angle1;
	angle2 = screenTwoPi - angle2;

	while(angle1 < 0.0)
	{
		angle1 += screenTwoPi;
	}

	while(angle1 > screenTwoPi)
	{
		angle1 -= screenTwoPi;
	}

	while(angle2 < 0.0)
	{
		angle2 += screenTwoPi;
	}

	while(angle2 > screenTwoPi)
	{
		angle2 -= screenTwoPi;
	}

	screenCanvasGC.beginPath();
	screenCanvasGC.arc(x, y, r, angle1, angle2, true);
	screenCanvasGC.stroke();
}




function screenRectangleArea(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.fillRect(x, y, width, height);
}




function screenRectangleLine(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.strokeRect(x, y, width, height);
}




function screenRectangleClear(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.clearRect(x, y, width, height);
}




function screenInitializeTurtle()
{
	screenTurtleX         = 0.0;
	screenTurtleY         = 0.0;
	screenTurtleHeading   = 0.0;
	screenTurtleIsPenDown = true;
}




function screenPenUp()
{
	screenTurtleIsPenDown = false;
}




function screenPenDown()
{
	screenTurtleIsPenDown = true;
}




function screenSetH(a)
{
	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	while(a < 0.0)
	{
		a += screenTwoPi;
	}

	while(a > screenTwoPi)
	{
		a -= screenTwoPi;
	}

	screenTurtleHeading = a;
}




function screenHome()
{
	screenTurtleX       = 0;
	screenTurtleY       = 0;
	screenTurtleHeading = 0;
}




function screenForward(d)
{
	var turtleNewX;
	var turtleNewY;

	turtleNewX = screenTurtleX + d * Math.cos(screenTurtleHeading);
	turtleNewY = screenTurtleY + d * Math.sin(screenTurtleHeading);

	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, turtleNewX, turtleNewY);
	}

	screenTurtleX = turtleNewX;
	screenTurtleY = turtleNewY;
}




function screenBack(d)
{
	screenForward(-d);
}




function screenRight(a)
{
	var turtleNewHeading;

	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	turtleNewHeading = screenTurtleHeading - a;

	while(turtleNewHeading < 0.0)
	{
		turtleNewHeading += screenTwoPi;
	}

	while(turtleNewHeading > screenTwoPi)
	{
		turtleNewHeading -= screenTwoPi;
	}

	screenTurtleHeading = turtleNewHeading;
}




function screenLeft(a)
{
	screenRight(-a);
}




function screenSetX(x)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, screenTurtleY);
	}

	screenTurtleX = x;
}




function screenSetY(y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, screenTurtleX, y);
	}

	screenTurtleY = y;
}




function screenSetXY(x, y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, y);
	}

	screenTurtleX = x;
	screenTurtleY = y;
}




function screenDrawVector(x, y, magnitude, direction, tipSize)
{
	var vectorTipX;
	var vectorTipY;
	
	// Vector line.
	screenPenUp();
	screenSetXY(x, y);
	screenPenDown();
	screenSetH(direction);
	screenForward(magnitude);
	vectorTipX = screenTurtleX;
	vectorTipY = screenTurtleY;
	
	// Vector tip.
	var tipAngle = screenDefaultVectorTipAngle;

	if(!screenIsAngleMeasurementInDegrees)
	{
		tipAngle *= screenRadiansPerDegree; // Radians.
	}

	var tipSize;
	
	if(tipSize > 0)
	{
		tipSize = screenDefaultVectorTipSize;
	}
	else
	{
		tipSize = screenDefaultVectorTipFactor * magnitude;
	}
	
	screenLeft(tipAngle);
	screenBack(tipSize);
	screenPenUp();
	screenForward(tipSize);
	screenPenDown();
	screenRight(2 * tipAngle);
	screenBack(tipSize);
	
	return { x : vectorTipX, y : vectorTipY };
}




function screenSetDegrees()
{
	screenIsAngleMeasurementInDegrees = true;
}


function screenSetRadians()
{
	screenIsAngleMeasurementInDegrees = false;
}




function screenSine(a)
{
	return Math.sin((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenCosine(a)
{
	return Math.cos((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenTangent(a)
{
	return Math.tan((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}




function screenRandomX()
{
	return Math.floor(Math.random() * screenWidth);
}


function screenRandomY()
{
	return Math.floor(Math.random() * screenHeight);
}

//////////
// End: screen canvas flip y-axis
>>>>>>> 4a66eb13399fd8bd3b2074a65794462e975e612e
=======
//////////
// Start: screen canvas flip y-axis
//////////

// Requires MooTools library

var screenCanvas;
var screenCanvasGC; // Graphics 2D context

var screenWidth;
var screenHeight;

var	screenIsAngleMeasurementInDegrees = true;

var	screenRadiansPerDegree = Math.PI / 180.0;

var screenTwoPi = 2.0 * Math.PI;

var screenIsBigPoints = true;

var screenDefaultAreaColor     = 'yellow';
var screenDefaultLineColor     = 'black';
var screenDefaultLineThickness = 2;

var screenTurtleX         = 0.0;
var screenTurtleY         = 0.0;
var screenTurtleHeading   = 0.0;
var screenTurtleIsPenDown = true;

var screenDefaultVectorTipAngle  = 30; // Degrees.
var screenDefaultVectorTipSize   = 10;
var screenDefaultVectorTipFactor = 0.20;




function screenInitialize(canvasId)
{
	screenCanvas = $(canvasId);

	screenCanvasGC = screenCanvas.getContext('2d');

	screenWidth  = screenCanvas.width;
	screenHeight = screenCanvas.height;
}




function screenAddEvent(event, handlerFunction)
{
	screenCanvas.addEvent(event, handlerFunction);
}




function screenSetupGraph()
{
	screenClear();

	screenSetAreaColor(screenDefaultAreaColor);

	screenSetLineThickness(screenDefaultLineThickness);
	screenSetLineColor(screenDefaultLineColor);
}




function screenClear()
{
	screenCanvasGC.clearRect(0, 0, screenWidth, screenHeight);
}




function screenSetLineThickness(thickness)
{
	screenCanvasGC.lineWidth = thickness;
}




function screenSetLineCap(capStyle) // 'butt', 'round', or 'square'
{
	screenCanvasGC.lineCap = capStyle;
}




function screenSetLineJoin(joinStyle) // 'round', 'bevel', or 'miter''
{
	screenCanvasGC.lineJoin = joinStyle;
}




function screenSetLineColor(color)
{
	screenCanvasGC.strokeStyle = color;
}




function screenSetAreaColor(color)
{
	screenCanvasGC.fillStyle = color;
}




function screenDrawLineSegment(x1, y1, x2, y2)
{
	// Flip y-axis.
	y1 = screenHeight - y1;
	y2 = screenHeight - y2;
	
	screenCanvasGC.beginPath();
	screenCanvasGC.moveTo(x1, y1);
	screenCanvasGC.lineTo(x2, y2);
	screenCanvasGC.stroke();
}




function screenDrawArcLine(x, y, r, angle1, angle2)
{
	// Flip y-axis.
	y = screenHeight - y;
	
	if(screenIsAngleMeasurementInDegrees)
	{
		angle1 *= screenRadiansPerDegree;
		angle2 *= screenRadiansPerDegree;
	}
	
	angle1 = screenTwoPi - angle1;
	angle2 = screenTwoPi - angle2;

	while(angle1 < 0.0)
	{
		angle1 += screenTwoPi;
	}

	while(angle1 > screenTwoPi)
	{
		angle1 -= screenTwoPi;
	}

	while(angle2 < 0.0)
	{
		angle2 += screenTwoPi;
	}

	while(angle2 > screenTwoPi)
	{
		angle2 -= screenTwoPi;
	}

	screenCanvasGC.beginPath();
	screenCanvasGC.arc(x, y, r, angle1, angle2, true);
	screenCanvasGC.stroke();
}




function screenRectangleArea(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.fillRect(x, y, width, height);
}




function screenRectangleLine(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.strokeRect(x, y, width, height);
}




function screenRectangleClear(x, y, width, height) // World.
{
	// Flip y-axis.
	y = screenHeight - y;

	screenCanvasGC.clearRect(x, y, width, height);
}




function screenInitializeTurtle()
{
	screenTurtleX         = 0.0;
	screenTurtleY         = 0.0;
	screenTurtleHeading   = 0.0;
	screenTurtleIsPenDown = true;
}




function screenPenUp()
{
	screenTurtleIsPenDown = false;
}




function screenPenDown()
{
	screenTurtleIsPenDown = true;
}




function screenSetH(a)
{
	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	while(a < 0.0)
	{
		a += screenTwoPi;
	}

	while(a > screenTwoPi)
	{
		a -= screenTwoPi;
	}

	screenTurtleHeading = a;
}




function screenHome()
{
	screenTurtleX       = 0;
	screenTurtleY       = 0;
	screenTurtleHeading = 0;
}




function screenForward(d)
{
	var turtleNewX;
	var turtleNewY;

	turtleNewX = screenTurtleX + d * Math.cos(screenTurtleHeading);
	turtleNewY = screenTurtleY + d * Math.sin(screenTurtleHeading);

	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, turtleNewX, turtleNewY);
	}

	screenTurtleX = turtleNewX;
	screenTurtleY = turtleNewY;
}




function screenBack(d)
{
	screenForward(-d);
}




function screenRight(a)
{
	var turtleNewHeading;

	if(screenIsAngleMeasurementInDegrees)
	{
		a *= screenRadiansPerDegree;
	}

	turtleNewHeading = screenTurtleHeading - a;

	while(turtleNewHeading < 0.0)
	{
		turtleNewHeading += screenTwoPi;
	}

	while(turtleNewHeading > screenTwoPi)
	{
		turtleNewHeading -= screenTwoPi;
	}

	screenTurtleHeading = turtleNewHeading;
}




function screenLeft(a)
{
	screenRight(-a);
}




function screenSetX(x)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, screenTurtleY);
	}

	screenTurtleX = x;
}




function screenSetY(y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, screenTurtleX, y);
	}

	screenTurtleY = y;
}




function screenSetXY(x, y)
{
	if(screenTurtleIsPenDown)
	{
		screenDrawLineSegment(screenTurtleX, screenTurtleY, x, y);
	}

	screenTurtleX = x;
	screenTurtleY = y;
}




function screenDrawVector(x, y, magnitude, direction, tipSize)
{
	var vectorTipX;
	var vectorTipY;
	
	// Vector line.
	screenPenUp();
	screenSetXY(x, y);
	screenPenDown();
	screenSetH(direction);
	screenForward(magnitude);
	vectorTipX = screenTurtleX;
	vectorTipY = screenTurtleY;
	
	// Vector tip.
	var tipAngle = screenDefaultVectorTipAngle;

	if(!screenIsAngleMeasurementInDegrees)
	{
		tipAngle *= screenRadiansPerDegree; // Radians.
	}

	var tipSize;
	
	if(tipSize > 0)
	{
		tipSize = screenDefaultVectorTipSize;
	}
	else
	{
		tipSize = screenDefaultVectorTipFactor * magnitude;
	}
	
	screenLeft(tipAngle);
	screenBack(tipSize);
	screenPenUp();
	screenForward(tipSize);
	screenPenDown();
	screenRight(2 * tipAngle);
	screenBack(tipSize);
	
	return { x : vectorTipX, y : vectorTipY };
}




function screenSetDegrees()
{
	screenIsAngleMeasurementInDegrees = true;
}


function screenSetRadians()
{
	screenIsAngleMeasurementInDegrees = false;
}




function screenSine(a)
{
	return Math.sin((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenCosine(a)
{
	return Math.cos((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}


function screenTangent(a)
{
	return Math.tan((screenIsAngleMeasurementInDegrees) ? (a * screenRadiansPerDegree) : a);
}




function screenRandomX()
{
	return Math.floor(Math.random() * screenWidth);
}


function screenRandomY()
{
	return Math.floor(Math.random() * screenHeight);
}

//////////
// End: screen canvas flip y-axis
>>>>>>> 4a66eb13399fd8bd3b2074a65794462e975e612e
//////////