wp.blocks.registerBlockType( "sivulabra/front-page", {
  title: "Etusivun sisältö",
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Etusivun sisältö"
    )
  },
  save: function() {
    return null;
  }
} )