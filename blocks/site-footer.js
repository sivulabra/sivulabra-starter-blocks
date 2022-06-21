wp.blocks.registerBlockType( "sivulabra/site-footer", {
  title: "Sivulabra Footer",
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
      "Sivuston alavalikko (footer)"
    )
  },
  save: function() {
    return null;
  }
} )