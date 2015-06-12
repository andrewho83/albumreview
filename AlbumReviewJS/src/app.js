/*! React Starter Kit | MIT License | http://www.reactstarterkit.com/ */

import 'babel/polyfill';
import React from 'react';
import FastClick from 'fastclick';

var App = React.createClass({
  render: function() {
    return (
      <h1>Hello World</h1>
    );
  }
});

function run() {
  React.render(<App/>, document.getElementById('app'));
}

// Run the application when both DOM is ready
// and page content is loaded
Promise.all([
  new Promise((resolve) => {
    if (window.addEventListener) {
      window.addEventListener('DOMContentLoaded', resolve);
    } else {
      window.attachEvent('onload', resolve);
    }
  }).then(() => FastClick.attach(document.body))
]).then(run);
