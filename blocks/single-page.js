wp.blocks.registerBlockType( "sivulabra/single-page", {
  title: "Sivun sisältö",
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
      "Sivun sisältö"
    )
  },
  save: function() {
    return null;
  }
} )