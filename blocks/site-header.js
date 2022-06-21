wp.blocks.registerBlockType( "sivulabra/site-header", {
  title: "Sivulabra Header",
  category: 'sivulabra',
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Sivuston ylävalikko (header)"
    )
  },
  save: function() {
    return null;
  }
} )