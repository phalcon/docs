<?php

namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\ViewInterface initializer
 */
interface ViewInterface {
/**
 * Sets views directory. Depending of your platform, always add a trailing slash or backslash
 *
 * @param string $viewsDir
 */
public function setViewsDir($viewsDir);

/**
 * Gets views directory
 *
 * @return string
 */
public function getViewsDir();

/**
 * Sets base path. Depending of your platform, always add a trailing slash or backslash
 *
 * @param string $basePath
 */
public function setBasePath($basePath);

/**
 * Sets the render level for the view
 *
 * @param string $level
 */
public function setRenderLevel($level);

/**
 * Sets default view name. Must be a file without extension in the views directory
 *
 * @param string $name
 */
public function setMainView($viewPath);

/**
 * Appends template before controller layout
 *
 * @param string|array $templateBefore
 */
public function setTemplateBefore($templateBefore);

/**
 * Resets any template before layouts
 *
 */
public function cleanTemplateBefore();

/**
 * Appends template after controller layout
 *
 * @param string|array $templateAfter
 */
public function setTemplateAfter($templateAfter);

/**
 * Resets any template before layouts
 *
 */
public function cleanTemplateAfter();

/**
 * Adds parameters to views (alias of setVar)
 *
 * @param string $key
 * @param mixed $value
 */
public function setParamToView($key, $value);

/**
 * Adds parameters to views
 *
 * @param string $key
 * @param mixed $value
 */
public function setVar($key, $value);

/**
 * Returns parameters to views
 *
 * @return array
 */
public function getParamsToView();

/**
 * Gets the name of the controller rendered
 *
 * @return string
 */
public function getControllerName();

/**
 * Gets the name of the action rendered
 *
 * @return string
 */
public function getActionName();

/**
 * Gets extra parameters of the action rendered
 *
 * @return array
 */
public function getParams();

/**
 * Starts rendering process enabling the output buffering
 */
public function start();

/**
 * Register templating engines
 *
 * @param array $engines
 */
public function registerEngines($engines);

/**
 * Executes render process from dispatching data
 *
 * @param string $controllerName
 * @param string $actionName
 * @param array $params
 */
public function render($controllerName, $actionName, $params);

/**
 * Choose a view different to render than last-controller/last-action
 *
 * @param string $renderView
 */
public function pick($renderView);

/**
 * Renders a partial view
 *
 * @param string $partialPath
 * @return string
 */
public function partial($partialPath);

/**
 * Finishes the render process by stopping the output buffering
 */
public function finish();

/**
 * Returns the cache instance used to cache
 *
 * @return Phalcon\Cache\BackendInterface
 */
public function getCache();

/**
 * Cache the actual view render to certain level
 *
 * @param boolean|array $options
 */
public function cache($options);

/**
 * Externally sets the view content
 *
 * @param string $content
 */
public function setContent($content);

/**
 * Returns cached ouput from another view stage
 *
 * @return string
 */
public function getContent();

/**
 * Returns the path of the view that is currently rendered
 *
 * @return string
 */
public function getActiveRenderPath();

/**
 * Disables the auto-rendering process
 *
 */
public function disable();

/**
 * Enables the auto-rendering process
 *
 */
public function enable();

/**
 * Resets the view component to its factory default values
 *
 */
public function reset();

}