wp.blocks.registerBlockType( "sivulabra/single-page", {
  title: "Sivu sisältö",
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Sivu sisältö"
    )
  },
  save: function() {
    return null;
  }
} )